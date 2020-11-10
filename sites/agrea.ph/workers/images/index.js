addEventListener('fetch', event => {
  event.respondWith(handleRequest(event.request))
})

async function handleRequest(request) {
    const url     = new URL(request.url)
    const headers = request.headers

    var purge  = false
    var accept = true

    cache = headers.get('cache-control')
    dest  = headers.get('sec-fetch-dest')

    //Check if we need to purge
    if(headers.has('cache-control') && headers.has('sec-fetch-dest')) {
        if(dest != 'image' && cache.match(/max-age=0|no-cache|no-store/)) {
            purge = true
        }
    }

    //Check if we need to rewrite
    if(headers.has('accept')) {
        accept = headers.get('accept')

        if(!url.searchParams.has('fm') && accept.match(/image\/webp/)) {
            if(url.searchParams.has('auto') && url.searchParams.get('auto').match(/true|format/)) {
                url.searchParams.set('fm', 'webp')
                accept = false
            }
        }
    }

    //Create request
    let rewriteRequest = new Request(url, request)

    if(!accept) {
        rewriteRequest.headers.set('accept', null)
    }

    //Purge cached image
    if(purge) {
        if(cache == 'no-cache') {
             rewriteRequest.headers.set('cache-accept', 'versions')
        }

        await purgeCache(new Array(rewriteRequest.url))
        await sleep(1000)
    }

    //Get the image
    response = await warmCache(rewriteRequest);

    //Purge cached versions
    if(cache == 'no-cache' && response.headers.has('cache-versions')) {
        urls = response.headers.get('cache-versions').split(',')
        urls = urls.map(url => new URL(url, request.url).toString())
        purgeCache(urls)
    }

    return response
}

async function warmCache(request) {
    response = await fetch(request, { cf: {
            cacheTtl: 604800, //one week
            cacheEverything: true
        }
    });

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

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
