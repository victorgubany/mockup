
{{-- Parte azul --}}
<div class="container-fluid g-0 generalForm" style="background-image: url('imgs/background.jpg');background-size: cover;background-repeat: no-repeat;background-position: center;" >
    {{-- <img class="img-fluid w-100" src="{{ asset('imgs/background.jpg') }}" alt="">  --}}
    <div class="container py-5" id='footer'>
        <div class="row justify-content-start justify-content-md-around align-items-top my-0 pt-0 my-md-5 pt-md-5">
            {{-- Título --}}
            <div class="col-auto">
                <h6 class="specialLetterFooter">CONTATO</h6>
                <h1 class="py-3 titleFooter1">Solicite um orçamento <span class="d-block">com a gente!</span></h1>
                <p class="subTitleFooter1">Entre em contato e garanta mão de obra para <span class="d-block"></span>qualquer área do seu negócio.<span class="d-block"></span></p>
            </div>
            {{-- Formulário --}}
            <div class="col-md-6 col-lg-5">
                <form action="">
                    @csrf
                    <div class="row pb-0 pb-sm-2 pe-0">
                        <div class="col-12 col-sm">
                            <input class=" formFooter border-white border-opacity-75 px-2 py-1" type="text" placeholder="Nome">
                        </div>
                        <div class="col-12 py-3 py-sm-0 col-sm g-sm-0">
                            <input class="formFooter border-white border-opacity-75 px-2 py-1" type="email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row pb-0 pb-sm-2 pt-0 pt-sm-1 pe-0">
                        <div class="col-12 col-sm">
                            <input id="tel" class="formFooter border-white border-opacity-75 px-2 py-1" type="text" placeholder="Telefone"><!-- colocar as mascaras e etc -->
                        </div>
                        <div class="col-12 py-3 py-sm-0 col-sm g-sm-0">
                            <input class="formFooter border-white border-opacity-75 px-2 py-1" type="text" placeholder="Empresa">
                        </div>
                    </div>
                    <div class="row pb-2 pt-1 pe-0">
                        <div class="col pe-sm-0">
                            <input class="formFooter border-white border-opacity-75 px-2 py-1" type="text" placeholder="Assunto">
                        </div>
                    </div>
                    <div class="row pb-2 pt-1 pe-0">
                        <div class="col pe-sm-0">
                            <textarea class="formFooter border-white border-opacity-75 p-2" name="" id="" cols="30" rows="5" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="row pe-0 pt-1">
                        <div class="col pe-sm-0">
                            <button type="submit" class="submitFormFooter w-100 py-1">
                                ENVIAR
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Parte preta --}}
<div class="container-fluid footer">
    <div class="container-lg px-4 py-4">
        <div class="row my-4 justify-content-around">
            <div class="row">
                <p class="titleWithDecoration">Fale Conosco</p>
            </div>
            {{-- Logo e Redes Sociais --}}
            <div class="col-12 col-md-auto order-1 order-lg-2 mx-lg-0 col-lg-2 col-xl-2">
                <div class="col">
                    <p class="titleFooter m-0">SUDESTE</p>
                </div>
                <div class="col py-3">
                    <span class="d-block bottomFooterTitle pb-1">Rio de Janeiro</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(21) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">São Paulo</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(11) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Campinas</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(19) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Espírito Santo</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(27) 99999-9999</a></span>
                </div>
            </div>

            <div class="col-12 col-md-auto order-1 order-lg-2 mx-lg-0 col-lg-2 col-xl-2">
                <div class="col">
                    <p class="titleFooter m-0">NORDESTE</p>
                </div>
                <div class="col py-3">
                    <span class="d-block bottomFooterTitle pb-1">Bahia</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(71) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Ceará</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(85) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Pernanbuco</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(81) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Sergipe</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(79) 99999-9999</a></span>
                </div>
            </div>

            {{-- Sobre a agência --}}
            <div class="col-12 col-md-auto order-1 order-lg-2 mx-lg-0 col-lg-2 col-xl-2">
                <div class="col">
                    <p class="titleFooter m-0">SUL</p>
                </div>
                <div class="col py-3">
                    <span class="d-block bottomFooterTitle pb-1">Paraná</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(41) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Rio Grande do Sul</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(51) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Santa Catarina</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(48) 99999-9999</a></span>

                </div>
            </div>
            {{-- Serviços --}}
            <div class="col-12 col-md-auto order-2 order-lg-3 mx-lg-0 col-lg-3 col-xl-2">
                <div class="col">
                    <p class="titleFooter m-0">CENTRO-OESTE</p>
                </div>
                <div class="col py-3">
                    <span class="d-block bottomFooterTitle pb-1">Mato Grosso do Sul</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(67) 99999-9999</a></span>

                    <span class="d-block bottomFooterTitle pb-1">Goiás</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(62) 99999-9999</a></span>
                </div>
            </div>
            {{-- Contato --}}
            <div class="col-12 col-md-auto order-2 order-lg-3 mx-lg-0 col-lg-3 col-xl-2">
                <div class="col">
                    <p class="titleFooter m-0">Norte</p>
                </div>
                <div class="col py-3">
                    <span class="d-block bottomFooterTitle pb-1">Amazonas</span>
                    <span class="d-block bottomFooterLetter pb-2"><a class=" headerLetter bottomFooterLetter" href="">(92) 99999-9999</a></span>
                </div>
            </div>{{-- Globo e linhas --}}

        {{-- Copyright --}}

    </div>
    <hr>
    <div class="row text-center py-3">
        <span class="copy">
            © Copyright 2024 | Todos os direitos reservados.
        </span>
        <span class="copy">
            VICTOR GUBANY SENA
        </span>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
{{-- Máscara do Telefone --}}
<script>
    $(document).ready(function() {
        $('#tel').mask('(00) 00000-0000');
    });
</script>
