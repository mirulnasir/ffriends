import './assets/css/styles.css'

// dom ready
document.addEventListener('DOMContentLoaded', function () {
    console.log('DOM ready')
    document.addEventListener('wpcf7mailsent', function (event) {
        console.log('wpcf7mailsent', event)
        window.dataLayer.push({
            "event": "cf7submission",
            "formId": event.detail.contactFormId,
            "response": event.detail.inputs
        })
    });
})