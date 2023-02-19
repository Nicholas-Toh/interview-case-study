export async function get(url, payload) {
    return await axios.get(url, payload);
}

export async function post(url, payload) {
    return await axios.post(url, payload);
}

export async function processData(method, url, payload) {
    try {
        const response = await method(url, payload);
        return response.data.data;
    } catch (error) {
        console.log(error);
        throw error;
    }
}

export async function getData(url, payload) {
    return await processData(get, url, payload);
}

export async function postData(url, payload) {
    return await processData(post, url, payload);
}
