<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envio de E-mail</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<form action="email.php" method="POST">
					<div class="mb-3">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="mb-3">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="mb-3">
						<label>Assunto</label>
						<input type="text" name="assunto" class="form-control">
					</div>
					<div class="mb-3">
						<label>Mensagem</label>
						<textarea rows="3" name="mensagem" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<div class="g-recaptcha" data-sitekey="6LciudwnAAAAAOxXLohCvecmZ0aAzDlCl9GcfdAp"></div>
						<button class="btn btn-success" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
</body>
</html>