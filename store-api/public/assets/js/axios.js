
const BASE_URL = 'http://120.79.173.163:9100/';
// Request interceptor
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "100000",
  "timeOut": "500000",
  "extendedTimeOut": "100000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

var pass = true, $btn = null;
const token = Cookies.get('token');
axios.interceptors.request.use(request => {
  if (token) {
    request.headers.common['Authorization'] = 'Bearer ' + token;
  }
  if(window.$this) {
    $btn = window.$this.find('button[type="submit"]');
    $btn.prop('disabled',true).addClass('loading');
  }
  return request 
}, function (error) {
  return Promise.reject(error)
})

axios.interceptors.response.use(request => {
    if($btn != null) {
      $btn.prop('disabled',false).removeClass('loading');
    }
    return request 
  }, function (err) {
    if (!err.response) {
      toastr['error']('Network error: Please check your internet connection or wait until servers are back online');
      console.log('Network error: Please check your internet connection.');
    } else {
      //console.log(err.response)
      if (err.response.data && (err.response.statusText === 'Unauthorized' || err.response.data === ' Unauthorized.')) {
        toastr['error'](((err.response.data.message) ? err.response.data.message : 'Unauthorized'));
        if (Cookies.get('token')) {
          location.href = '/login';
        }
      } else if (err.response.data.errors) {
        const errors = JSON.parse(JSON.stringify(err.response.data.errors))
        for (const i in errors) {
          console.log(errors[i]);
          toastr['error'](errors[i]);
        }
      } else {
        console.log((err.response.data.message) ? err.response.data.message : 'Unknown error occurred');
        toastr['error']((err.response.data.message) ? err.response.data.message : 'Unknown error occurred');
      }
    }
    return Promise.reject(err);
})