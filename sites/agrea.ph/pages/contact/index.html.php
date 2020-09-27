---
form:
    name: contact-form
    processors:
        - 'email':
            recipients: 
                - hello@agrea.ph
                - someonelse@agrea.ph
            title: Contact Form
            subject: New enquiry from the contact form
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
        message: [string, required]
    redirect: contact/thank-you
    honeypot: firstName_407d3z05
visible: false
---
