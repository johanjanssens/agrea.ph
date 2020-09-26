---
form:
    name: form
    processors: 'ext:pages.processor.newsletter'
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
    redirect: newsletter/thank-you
    honeypot: firstName_a6c1bd21
visible: false
---
