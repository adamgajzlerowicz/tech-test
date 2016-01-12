function getPrototype(i){
    return  '<tr><td><input type="text" name="people['+i+'][firstname]" value=""></td><td><input type="text" name="people['+i+'][surname]" value=""></td></tr>';
}
$(document).ready(function(){
    $('#add_row').click(function(e){
        e.preventDefault();
        alert('s')
    })
})