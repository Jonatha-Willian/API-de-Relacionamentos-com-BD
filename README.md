Usando o Postman ou Insomnia é possível enviar e recebeber dados seguindo o padrão a baixo:

Novo user
Método POST
url: .../users
{
	"name": "teste1 da silva",
	"email": "teste1@teste.com",
	"password": "senhaforte123"
}

Exibir um user
Método GET
url: .../users/{id}

Exibir todos os users
Método GET
url: .../users


Novo Address:
Método POST
url: .../addresses
{
	"address": "Rua Teste2, 123"
}
Exibir um address
Método GET
url: .../addresses/{id}

Exibir todos os addresses
Método GET
url: .../addresses


Novo Invoice:
Método POST
url: .../invoices
{
	"description": "Teste de invoice",
	"value": 120.5,
	"address_id": 1,
	"user_id": 1
}

Exibir um invoice
Método GET
url: .../invoices/{id}

Exibir todos os invoices
Método GET
url: .../invoices
