import './bootstrap';

Alpine.store('device', {
    mobile : window.innerWidth < 500,
    tablet : window.innerWidth < 868,
    desktop: window.innerWidth > 869
});
