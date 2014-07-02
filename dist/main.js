require.config({
    baseUrl: _base_url_ + 'bower',
    paths: {
        'jquery': 'jquery/dist/jquery.min',
        'underscore': 'underscore/underscore',
        'bootstrap': 'bootstrap/dist/js/bootstrap'
    },
    shim: {
        bootstrap: {
            deps: ['jquery']
        }
    }
});

require([
    'underscore',
    'bootstrap'
], function (_) {
    console.log(_, $);
});