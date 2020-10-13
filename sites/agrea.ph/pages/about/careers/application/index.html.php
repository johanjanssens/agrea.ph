---
form:
    name: job-application
    processors:
        - 'email':
            recipients:
                - hr@agrea.ph
            title: Job Application Form
            subject: New job application
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
        message: [string, required]
    redirect: about/careers/application/thank-you
    honeypot: firstName_27QnzTQX
visible: false
---
