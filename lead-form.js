/*
 * lead-form.js — handles the on-page booking forms (class="lead-form").
 *
 * Validates name + phone, then sends the visitor to thank-you.html.
 * The dedicated contact page (contact.html) carries its own richer
 * version of this logic, including the WhatsApp fallback.
 *
 * SET FORM_ENDPOINT to your form handler URL. While it is empty the
 * form validates and redirects, but the lead is NOT delivered anywhere.
 */
(function () {
  var FORM_ENDPOINT = '';
  var THANK_YOU_URL = 'thank-you.html';

  function digits(v) { return (v || '').replace(/\D/g, ''); }

  function flag(el, bad) {
    el.style.borderColor = bad ? '#C2410C' : '';
    el.style.boxShadow = bad ? '0 0 0 3px rgba(194,65,12,.16)' : '';
  }

  Array.prototype.forEach.call(document.querySelectorAll('form.lead-form'), function (form) {
    var nameEl = form.querySelector('input[name="name"]');
    var phoneEl = form.querySelector('input[name="phone"]');
    var btn = form.querySelector('button[type="submit"]');

    Array.prototype.forEach.call(form.querySelectorAll('input, textarea'), function (el) {
      el.addEventListener('input', function () { flag(el, false); });
    });

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var bad = null;
      if (nameEl && !nameEl.value.trim()) { flag(nameEl, true); bad = bad || nameEl; }
      if (phoneEl && digits(phoneEl.value).length < 10) { flag(phoneEl, true); bad = bad || phoneEl; }
      if (bad) { bad.focus(); return; }

      var go = function () {
        var q = nameEl && nameEl.value.trim()
          ? '?name=' + encodeURIComponent(nameEl.value.trim())
          : '';
        window.location.href = THANK_YOU_URL + q;
      };

      if (btn) { btn.disabled = true; btn.textContent = 'Sending…'; }

      if (!FORM_ENDPOINT) { go(); return; }

      fetch(FORM_ENDPOINT, {
        method: 'POST',
        headers: { 'Accept': 'application/json' },
        body: new FormData(form)
      }).then(go).catch(go);
    });
  });
})();
