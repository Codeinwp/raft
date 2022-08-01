const installPlugin = (slug) => {
    return new Promise((resolve) => {
        wp.updates.ajax('install-plugin', {
            slug,
            success: () => {
                resolve({success: true});
            },
            error: (err) => {
                resolve({success: false, code: err.errorCode});
            },
        });
    });
};


const activatePlugin = (url) => {
    return new Promise((resolve) => {
        jQuery.get(url).done((r) => {
            resolve({success: true});
            console.log(r)
        }).fail((err) => {
            console.log(err)
            resolve({success: false});
        });
    });
}

export {
    installPlugin,
    activatePlugin
}