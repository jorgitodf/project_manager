import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['Authorization'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1MzQ4NTE4NTAsImV4cCI6MTUzNDkzODI1MCwidXNlciI6eyJpZCI6IjkiLCJuYW1lIjoiTHVjaWFuYSBGXHUwMGU5bGl4IiwiZW1haWwiOiJsdWNpYW5hQGdtYWlsLmNvbSIsImNyZWF0ZWQiOm51bGwsIm1vZGlmaWVkIjpudWxsfX0.C9MeYby8YQikZBLmL6NiJgicna8kpbKH3ZE-YSlpGxU';
