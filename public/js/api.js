var Model = function (apiUrl) {
    var _verbs = { delete: 'delete', get: 'get', put: 'put', post: 'post' };
    var _apiUrl = apiUrl;

    function all() {
        return callApi(rute(), _verbs.get);
    }

    function find(modelId) {
        return callApi(rute(modelId), _verbs.get);
    }

    function add(model) {
        return callApi(rute(), _verbs.post, model);
    }

    function update(model, modelId) {
        return callApi(rute(modelId), _verbs.put, model);
    }

    function destroy(modelId) {
        return callApi(rute(modelId), _verbs.delete);
    }

    function bulkDestroy(modelIds) {
        return callApi(rute(), _verbs.delete, modelIds);
    }

    function callApi(url, method, data) {
        data = data || {};
        return new Promise(function (resolve, reject) {
            $.ajax({ method, url, data, crossDomain: true })
                .done(function (response) {
                    if (response.status) {
                        resolve(response.data);
                    } else {
                        reject({
                            error: response.error,
                            status: response.status
                        });
                    }
                }).fail(function (error) {
                    reject({
                        error: "Error en la conexión. Inténtelo de nuevo por favor.",
                        status: error.status
                    });
                });
        });
    }

    function rute(modelId = null) {
        let model = modelId ? '/' + modelId : '';
        return _apiUrl + model;
    }

    return {
        all, find, add, update, destroy, bulkDestroy, callApi,
        get apiUrl() { return _apiUrl; },
        set apiUrl(apiUrl) { _apiUrl = apiUrl; },
        get verbs() { return _verbs; }
    };
};