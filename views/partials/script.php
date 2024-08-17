<script>
    let isNavVisible = false;
    function getElement(id) {
        return document.getElementById(id);
    }

    function showAndHide() {

        const navigation_two = getElement('navigation_two');
        if (!isNavVisible) {
            navigation_two.classList.remove('hidden');
            isNavVisible = true;
        } else {
            navigation_two.classList.add('hidden');
            isNavVisible = false;
        }
    }

    const toggleBtn = getElement('toggle');
    toggleBtn.addEventListener('click', showAndHide)




</script>
