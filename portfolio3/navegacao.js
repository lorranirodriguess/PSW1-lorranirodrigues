let botaoNavegacao = document.getElementById('botao-abrir-navegacao')
let navegacao = document.getElementById('navegacao-mobile')

botaoNavegacao.addEventListener('click', ()=>{
    navegacao.classList.add('abrir-menu')
})

navegacao.addEventListener('click', ()=>{
    navegacao.classList.remove('abrir-menu')
})
