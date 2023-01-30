# cookies-utils

<p align="center">
    <a href="https://www.npmjs.com/package/cookies-utils">
        <img src="https://img.shields.io/npm/v/cookies-utils.svg?style=flat-square&colorB=51C838" alt="NPM Version">
    </a>
    <a href="https://codecov.io/gh/hamzahamidi/cookies-utils">
        <img src="https://codecov.io/gh/hamzahamidi/cookies-utils/branch/main/graph/badge.svg?token=KST9RPYZYI"/>
    </a>
    <a href="https://github.com/hamzahamidi/cookies-utils/actions?query=workflow%3ABuild">
        <img src="https://github.com/hamzahamidi/cookies-utils/workflows/Build/badge.svg" alt="Build Status">
    </a>
</p>

This project contains functions to help manage cookies.

## Installation

### NPM

Install the library with `npm install cookies-utils`.

### CDN

Or use it directly in your browser via jsDelivr or unpkg:

```html
<script src="https://cdn.jsdelivr.net/npm/cookies-utils/cookies-utils.min.js"></script>

...

cookiesUtils.deleteCookie('name')
```

or

```html
<script src="https://unpkg.com/cookies-utils/cookies-utils.min.js"></script>

...

cookiesUtils.deleteCookie('name')
```

## Usage

Set a cookie

```javascript
import { setCookie } from "cookies-utils";

// more information about the options in documentation https://developer.mozilla.org/en-US/docs/Web/API/Document/cookie
const cookieOptions = {
  name: "name", // string,
  value: "value", // string,
  maxAge: 10 * 60, // optional number (value in seconds),
  expires: new Date(2099, 10, 1), // optional Date,
  path: "/path", // optional string,
  domain: "site.com", // optional string,
  secure: true, // optional boolean,
  sameSite: "lax", // optional enum 'lax' | 'strict' | 'none'
};
setCookie(cookieOptions);
```

Check existence of cookie

```javascript
import { cookieExists } from "cookies-utils";

const isExist = cookieExists("name");
```

Delete a cookie

```javascript
import { deleteCookie } from "cookies-utils";

deleteCookie("name");
```

Check if cookie has specific value

```javascript
import { cookieHasValue } from "cookies-utils";

const hasValue = cookieHasValue("name", "value");
```

Delete all cookies

```javascript
import { deleteAllCookies } from "cookies-utils";

deleteAllCookies();
```
