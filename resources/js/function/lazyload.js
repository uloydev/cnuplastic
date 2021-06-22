import LazyLoad from "vanilla-lazyload";

const lazyload = new LazyLoad({
    callback_loading: (el) => console.log(`${el} loading`),
    callback_loaded: (el) => console.log(`${el} loaded`)
})