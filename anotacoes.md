Criar sessions: 


    session(['mensagem.sucesso' => 'Série adicionada com successo!']); 

    **Forget é usado para limpar a session** 
        // $mensagemSucesso = $request->session()->get('mensagem.sucesso');

    $request->session()->forget('mensagem.sucesso'); 

Flash faz com que armazena na session somente para 1 requisição 

    $request->session()->flash('mensagem.sucesso', "Série {$serie->nome} adicionada com sucesso!"); 

 

Serie::find($request->series); 

        Serie::destroy($request->series); 

  

 

$serie = Serie::create($request->all()); 

        // Serie::create($request->only(['nome','descricao'])); Busca somente os dados passados como paramtros 

        // Serie::create($request->except(['descricao'])); Busca todos os dados passados menos os dos parâmetros 

        // $nomeSerie = $request->nome; 

        // $serie = new Serie(); 

        // $serie->nome = $nomeSerie; 

        // $serie->save(); 



        with:

        Tanto para enviar à view quanto para adicionar dados na session como flash, além de ->with('campo', 'valor'); podemos usar a sintaxe withCampo('valor');. Ambos são equivalentes.

Já o método ->withMensagemSucesso('Mensagem'); seria equivalente a ->with('mensagem_sucesso', Mensagem'); (repare no _).