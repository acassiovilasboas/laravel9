@csrf
<label for="name">Nome</label>
<input type="text" name="name" id="" value="{{ old('name') }}">

<label for="email">E-mail</label>
<input type="email" name="email" id="" value="{{ old('email') }}">

<label for="password">Senha</label>
<input type="password" name="password" id="">

<input type="submit" value="Criar usuáriosss">
