export function promices() {
    function httpGetAsync(url, resolve, reject) {

        return new Promise(function(resolve, reject) {

            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (this.status == 200) {
                    resolve(this.response);
                } else {
                    var error = new Error(this.statusText);
                    error.code = this.status;
                    reject(error);
                }
            };

            xhr.onerror = function() {
                reject(new Error("Network Error"));
            };

            xhr.send();
        });

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

export function promice_end() {
    let promise = new Promise((resolve, reject) => {

        // reject вызван раньше, resolve будет проигнорирован
        setTimeout(() => reject(new Error("error")), 2000);

        setTimeout(() => resolve("ignored"), 1000);
        console.log(1);
    }).then(
        result => {
            console.log("Fulfilled1: " + result);

            return result;
        },
        error => console.log("Rejected1: " + error)
     );

    promise
        .then(
            result => console.log("Fulfilled: " + result),
            error => console.log("Rejected: " + error)
        );
}

