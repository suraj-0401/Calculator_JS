function add(val){
  let input_ = document.getElementById('display');
  input_.value = input_.value + val;
}

function reset(){
  document.getElementById('display').value = '';
}

function evaluate_expr(){
  let input_ = document.getElementById('display');
  let result = eval(input_.value);
  input_.value = result;
}
