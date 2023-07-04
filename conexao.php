<?php
global $wpdb;

$tabela = $wpdb->prefix . 'wp_e_submissions_values'; // Substitua 'nome_da_tabela' pelo nome real da tabela

$dados = array(
    'key' => 'name',
);

$where = array(
    'id' => '1',
);

$wpdb->update($tabela, $dados, $where);

if ($wpdb->last_error) {
    echo 'Erro ao atualizar os valores: ' . $wpdb->last_error;
} else {
    echo 'Valores atualizados com sucesso!';
}
?>