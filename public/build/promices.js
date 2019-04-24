export function promices() {
    function httpGetAsync(theUrl, resolve, reject)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = () => {
            if (parseInt(xmlHttp.readyState) === 4 && parseInt(xmlHttp.status) === 200) {
                resolve(xmlHttp.responseText);
            }
        };
        xmlHttp.onerror = () => {
            reject(xmlHttp.statusText);
        };
        xmlHttp.open("GET", theUrl, true);
        xmlHttp.send();
    }

    var fetchPromised = (url) => {
        return new Promise((resolve, reject) => {
            httpGetAsync(url, resolve, reject);
        });
    };

    return Promise.all([
        fetchPromised("/sourse.json"),
        fetchPromised("/menu.json")
    ]);
}

export function promice_chain() {
    let promice = new Promise((resolve, reject) => {
        resolve(1);
    });

    promice
        .then(() => {
            console.log(1);
        })
        .then(() => {
            console.log(2);
        })
        .then((result) => {
            console.log(res);
        }, (error) => {
            console.log(`Error: ${error}`);
        })
        .then(() => {
            console.log(4);
        })
        .catch((error) => {
            console.log(`Error gl: ${error}`);
        });
    promice.then(() => {
        console.log(5);
    })
}



