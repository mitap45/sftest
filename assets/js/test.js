import $ from 'jquery';
import '../styles/test.css';
import Vue from 'vue';

var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        messageTwo: 'Hello Vue 2!'

    },
    delimiters: ['${', '}$']
})


$(document).ready(function() {
    // alert('jquery works');
});
