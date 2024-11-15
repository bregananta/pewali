!(function (factory) {
    "function" == typeof define && define.amd
        ? define(["jquery"], factory)
        : "object" == typeof exports
        ? (module.exports = factory(require("jquery")))
        : factory(jQuery);
})(function ($) {
    var pluses = /\+/g;
    function encode(s) {
        return config.raw ? s : encodeURIComponent(s);
    }
    function decode(s) {
        return config.raw ? s : decodeURIComponent(s);
    }
    function stringifyCookieValue(value) {
        return encode(config.json ? JSON.stringify(value) : String(value));
    }
    function parseCookieValue(s) {
        0 === s.indexOf('"') &&
            (s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
        try {
            return (
                (s = decodeURIComponent(s.replace(pluses, " "))),
                config.json ? JSON.parse(s) : s
            );
        } catch (e) {}
    }
    function read(s, converter) {
        var value = config.raw ? s : parseCookieValue(s);
        return $.isFunction(converter) ? converter(value) : value;
    }
    var config = ($.cookie = function (key, value, options) {
        if (arguments.length > 1 && !$.isFunction(value)) {
            if (
                "number" ==
                typeof (options = $.extend({}, config.defaults, options))
                    .expires
            ) {
                var days = options.expires,
                    t = (options.expires = new Date());
                t.setMilliseconds(t.getMilliseconds() + 864e5 * days);
            }
            return (document.cookie = [
                encode(key),
                "=",
                stringifyCookieValue(value),
                options.expires
                    ? "; expires=" + options.expires.toUTCString()
                    : "",
                options.path ? "; path=" + options.path : "",
                options.domain ? "; domain=" + options.domain : "",
                options.secure ? "; secure" : "",
            ].join(""));
        }
        for (
            var result = key ? void 0 : {},
                cookies = document.cookie ? document.cookie.split("; ") : [],
                i = 0,
                l = cookies.length;
            i < l;
            i++
        ) {
            var parts = cookies[i].split("="),
                name = decode(parts.shift()),
                cookie = parts.join("=");
            if (key === name) {
                result = read(cookie, value);
                break;
            }
            key ||
                void 0 === (cookie = read(cookie)) ||
                (result[name] = cookie);
        }
        return result;
    });
    (config.defaults = {}),
        ($.removeCookie = function (key, options) {
            return (
                $.cookie(key, "", $.extend({}, options, { expires: -1 })),
                !$.cookie(key)
            );
        });
});
