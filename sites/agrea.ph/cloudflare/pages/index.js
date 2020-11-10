
addEventListener('fetch', event => {
   event.respondWith(handleRequest(event.request))
})

async function handleRequest(request) {
    let response;
    const url = new URL(request.url)

    //Redirect to /browser-not-supported for all version of IE (not Edge)
    if(request.headers.has('user-agent'))  {
        agent = request.headers.get('user-agent')

        const redirect = '/browser-not-supported';
        if(url.pathname != redirect && (agent.includes('MSIE') || agent.includes('Trident')))  {
            url.pathname = redirect
            return Response.redirect(url)
        }
    }

    //Passthrough requests to origin for documents (html, json, xml, rss and csv)
    if(request.headers.has('cache-control')) {

        //Create a GET over POST request to bypass cloudflare cache
        const newRequest = new Request(request, { method: 'POST'})
        newRequest.headers.set('X-Http-Method-Override', 'GET')
        newRequest.headers.set('Origin', url.origin)
        response = await fetch(newRequest)

        //Only purge the cloudflare cache if it's no longer valid (do not wait)
        if(response.status != 304 && response.headers.has('cache-status')) {
            const status = response.headers.get('cache-status').toLowerCase()
            if(!status.includes('hit') &&  !status.includes('identical')) {
                purgeCache(new Array(request.url))
            }
        }
    }

    //Passthrough the request and let cloudflare handle it
    if(!response)
    {
        response = await fetch(request, {
            cf: { cacheEverything: true }
         });
    }

    return response
}

async function purgeCache(urls) {
    let content = '{"files": '+ JSON.stringify(urls) +'}'
    let headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer '+API_TOKEN,
    }

    const url  = 'https://api.cloudflare.com/client/v4/zones/'+ZONE_ID+'/purge_cache'
    const init = {
        method: 'POST',
        headers: headers,
        body: content
    }

    response = await fetch(url, init).then((response) => {
        return response.text()
    }).then((data) => {
        console.log(data)
    })

    return response;
}
