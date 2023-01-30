type cookie = {
    name: string,
    value: string,
    maxAge?: number,
    expires?: Date,
    path?: string,
    domain?: string,
    secure?: boolean,
    sameSite?: 'lax' | 'strict' | 'none'
}
const expireTime = ';expires=Thu, 01 Jan 1970 00:00:00 GMT';

export function getCookieValue(name: string): string | undefined {
    return document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop();
}

export function setCookie({ name, value, maxAge, expires, path, domain,secure,sameSite }: cookie): void {

    let cookieText = encodeURIComponent(name) + '=' + encodeURIComponent(value);

    if (expires instanceof Date) {
        cookieText += '; expires=' + expires.toUTCString();
    }
    if (maxAge) {
        cookieText += '; max-age=' + maxAge;
    }
    if (path) {
        cookieText += '; path=' + path;
    }
    if (domain) {
        cookieText += '; domain=' + domain;
    }
    if (secure) {
        cookieText += '; secure';
    }
    if (sameSite) {
        cookieText += '; samesite' + sameSite;
    }

    document.cookie = cookieText;
}

export function cookieHasValue(name: string, value: string): boolean {
    return document.cookie.split(';')
        .some(item => item.trim().indexOf(name + '=' + value.trim()) == 0
        );
}

export function cookieExists(name: string): boolean {
    return document.cookie.split(';')
        .some(item => item.trim().indexOf(name + '=') == 0
        );
}

export function deleteCookie(name: string, path?: string, domain?: string): void {
    if (cookieExists(name)) {
        document.cookie = name + '=' +
            ((path) ? ';path=' + path : '') +
            ((domain) ? ';domain=' + domain : '') +
            expireTime;
    }
}

export function deleteAllCookies(): void {
    const cookies = document.cookie.split(';');

    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf('=');
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + '=' + expireTime;
    }
}