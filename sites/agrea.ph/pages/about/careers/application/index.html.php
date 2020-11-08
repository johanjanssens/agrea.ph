---
form:
    name: volunteer-application
    processors:
        - 'email':
            recipients:
                - hello@agrea.ph
            title: Volunteer Form
            subject: New volunteer application
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
        sectors: [string]
        interests: [string]
        experience: [string]
    redirect: programs/volunteer/thank-you
    honeypot: firstName_FJdL92fe
metadata:
    robots: [noindex, nofollow]
visible: false
---
