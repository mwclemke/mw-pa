var referrerRefreshAnchors = document.querySelectorAll('a#referrer-refresh');
referrerRefreshAnchors = [].slice.call(referrerRefreshAnchors);
referrerRefreshAnchors.forEach(function(element) { element.click(); });
