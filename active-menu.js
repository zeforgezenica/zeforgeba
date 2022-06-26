let menu_items = [
    '/',
    '/hammerit',
    '/meetupi',
    '/kontakt'
];

let active_menu_item_class = 'active';
let slug = window.location.pathname;


for (const item of menu_items) {
    if(slug.includes(item)){
        document.getElementById((item == '/') ? 'pocetna' : item.slice(1)).classList.add(active_menu_item_class)
        removeActiveFromRemainingMenuItems(item)
    }
}

function removeActiveFromRemainingMenuItems(active_menu_item){
    for (const item of menu_items) {
        if(item != active_menu_item) 
            document.getElementById((item == '/') ? 'pocetna' : item.slice(1)).classList.remove(active_menu_item_class)
        
    }
}