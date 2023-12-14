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
function validateForm() {
    var name = document.forms["UnixForm"]["name"].value;
    var q1 = document.forms["UnixForm"]["answer1"].value;
    var q2 = document.forms["UnixForm"]["answer2"].value;
    var q3 = document.forms["UnixForm"]["answer3"].value;
    var q4 = document.forms["UnixForm"]["answer4"].value;
    var q5 = document.forms["UnixForm"]["answer5"].value;
    var q6 = document.forms["UnixForm"]["answer6"].value;
    var q7 = document.forms["UnixForm"]["answer7"].value;
    var q8 = document.forms["UnixForm"]["answer8"].value;
    var q9 = document.forms["UnixForm"]["answer9"].value;
    var q10 = document.forms["UnixForm"]["answer10"].value;
    var q11 = document.forms["UnixForm"]["answer11"].value;
    var q12 = document.forms["UnixForm"]["answer12"].value;
    var q13 = document.forms["UnixForm"]["answer13"].value;
    if (name == null || name == "") {
        alert("Please enter your name.");
        return false;
    }
    if (q1 == null || q1 == "") {
        alert("Question 1 not been filled out. Please resubmit.");
        return false;
    }
    if (q2 == null || q2 == "") {
        alert("Question 2 not been filled out. Please resubmit.");
        return false;
    }
    if (q3 == null || q3 == "") {
        alert("Question 3 not been filled out. Please resubmit.");
        return false;
    }
    if (q4 == null || q4 == "") {
        alert("Question 4 not been filled out. Please resubmit.");
        return false;
    }
    if (q5 == null || q5 == "") {
        alert("Question 5 not been filled out. Please resubmit.");
        return false;
    }
    if (q6 == null || q6 == "") {
        alert("Question 6 not been filled out. Please resubmit.");
        return false;
    }
    if (q7 == null || q7 == "") {
        alert("Question 7 not been filled out. Please resubmit.");
        return false;
    }
    if (q8 == null || q8 == "") {
        alert("Question 8 not been filled out. Please resubmit.");
        return false;
    }
    if (q9 == null || q9 == "") {
        alert("Question 9 not been filled out. Please resubmit.");
        return false;
    }
    if (q10 == null || q10 == "") {
        alert("Question 10 not been filled out. Please resubmit.");
        return false;
    }
    if (q11 == null || q11 == "") {
        alert("Question 11 not been filled out. Please resubmit.");
        return false;
    }
    if (q12 == null || q12 == "") {
        alert("Question 12 not been filled out. Please resubmit.");
        return false;
    }
    if (q13 == null || q13 == "") {
        alert("Question 13 not been filled out. Please resubmit.");
        return false;
    }
}

function expand(element) {
    // get the collapsible element of the clicked arrow
    var collapsibleElement = element.nextElementSibling.firstElementChild;
    
    // if element is already expanded, collapse it
    if (collapsibleElement.classList.contains("expand")) {
        // take away the rotate class from the arrow to make it point down again
        element.lastElementChild.classList.remove("rotate");

        // collapse the expanded section
        collapsibleElement.classList.remove("expand");
    } else {
        // rotate the arrow to point upward
        element.lastElementChild.classList.add("rotate");

        // expand the collapsed section
        collapsibleElement.classList.add("expand");

    }
    
}
