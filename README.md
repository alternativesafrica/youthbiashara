![AgroHub Expo](img/logo.svg)

## About

Alternatives Africa new site development.
URL for preview of theme: https://staging.alternatives.co.ke/


## Installation
A few steps to get started with setup

### npm install
- Open your terminal
- Change to the directory where you want to add UnderStrap
- Type `npm install understrap`


### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install`

### Running
To work with and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
{
    "browserSyncOptions" : {
        "proxy": "localhost/alternatives/", //Or name of your local installation folder
        "notify": false
    },
    ...
};
```
- then run: `$ gulp watch-bs`


