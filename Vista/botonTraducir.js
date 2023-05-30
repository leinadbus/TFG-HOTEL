function changeLanguage(lang) {
    var select = document.querySelector('#google_translate_element select');
    select.value = lang;
    select.dispatchEvent(new Event('change'));
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en'
    }, 'google_translate_element');
}