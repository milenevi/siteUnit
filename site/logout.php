<?php

// recuperar sessão existente
session_start();

// limpar todas as variáveis.
session_unset();

// destruir
session_destroy();

header("Location: index.php");