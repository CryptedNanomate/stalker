function request(url, data, callback)
{
    let xhr  = new XMLHttpRequest();
    xhr.open('POST',url,true);
    let loader = document.createElement('div');
    loader.className = 'loader';

    xhr.addEventListener('readystatechange',function(){
        if(xhr.readyState == 4 )
        {
            if(callback)
            {
                callback(xhr.response);
            }
            loader.remove();
        }
    });
    let formdata = data ? (data instanceof FormData ? data : new FormData(document.querySelector(data))) : new FormData();
    let csrfMetaTag = document.querySelector('meta[name="csrf_token"]');
    if(csrfMetaTag) {
		formdata.append('csrf_token', csrfMetaTag.getAttribute('content'));
	}
    xhr.send(data ? (data instanceof FormData ? data : new FormData()) :  undefined);
    xhr.send(formdata);
}


