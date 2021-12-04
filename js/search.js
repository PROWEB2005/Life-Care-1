const search = document.querySelector('.search'),
      searchIcon = document.querySelector('.search_icon'),
      searchForm = document.querySelector('.search_form'),
      searchCancel = document.querySelector('.search_cancel');
search.addEventListener('input',function(){
    searchCancel.style.display = 'block';
    if(this.value == ''){
        searchCancel.style.display = 'none';
    }
});
searchCancel.addEventListener('click', function(){
    search.value = '';
});
searchIcon.addEventListener('click', function(){
    searchForm.submit();
});