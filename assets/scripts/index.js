function toggle(element) {
    console.log(element);
    // This function toggles the state of the filterOptions, adding and removing the active classlist to visually indicate the option has been selected
    if(element.classList.contains('active')){
        element.classList.remove('active')
    }else{
        element.classList.add('active')
    }

    // keeping track of how many filters are active
    var numberOfActiveFilters = 0

    // This bit of code is responsible for displaying the filtered cards
    filterOptions = document.getElementsByClassName("filterOptions"); //first, get all the filter options

    for(var i = 0; i < filterOptions.length; i++){

        // we must select the cards that has the same tag as the selected filter. We can grab the parent using the :has selector.
        // we can also grab the specific filter as the second class will always be the type of filter
        cardElements = document.querySelectorAll('.card:has(.' + filterOptions[i].classList[1] + ')')

        // loop thru all the filter options to see which one is active
        if (filterOptions[i].classList.contains("active")) {
            //loop through all the cards of the same type and removing the hide class so the filtered type shows up
            [...cardElements].forEach((e)=> e.classList.remove('hide'))
            
            //updating number of active filters
            numberOfActiveFilters += 1
        }else{
            // the current filter type is not warented so must hide
            [...cardElements].forEach((e)=> e.classList.add('hide'))
        }
    }

    // none of the filters are active. must show all cards (basically a reset). This can be improved upon as we are looping through this list twice and potentially hiding and then showing the elements, making it very inefficent.
    if (numberOfActiveFilters == 0 ){
        for(var i = 0; i < filterOptions.length; i++){

            // we must select the card that has the same tag as the selected filter. We can grab the parent using the :has selector.
            // we can also grab the specific filter as the second class will always be the type of filter (like exercises or individual project)
            cardElements = document.querySelectorAll('.card:has(.' + filterOptions[i].classList[1] + ')');

            //removing the hide class so the filtered type shows up
            [...cardElements].forEach((e)=> e.classList.remove('hide'))
        }                  
    }
}