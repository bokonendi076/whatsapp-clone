function searchUsers() {
    const filterInput = document.querySelector('.d-searchbar');
    const itemContainer = document.querySelector('.nav-chats');
    const items = itemContainer.querySelector('.user-name');
    const filterValue = filterInput.value.toLowerCase();

        for (let i = 0; i < items.length; i++) {
            const item = items[i];
            const itemText = item.textContent || item.innerText;

            if (itemText.toLowerCase().indexOf(filterValue) > -1) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        }
}