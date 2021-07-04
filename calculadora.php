<?php
      $valorInvestido = 10;
      $visualizacoes = round(100 / 12);
      $cliquesParaCompartilhamento = round(20 / 3);

      $anuncioPrincipal = $valorInvestido * 30;
      $cliques = round($anuncioPrincipal / $visualizacoes);
      $compartilhamento = round($cliques / $cliquesParaCompartilhamento);
      $novasVisualizacoes = $compartilhamento * 40;

      $totalDeVisualizacoes = $anuncioPrincipal + $novasVisualizacoes;

    echo "Aproximadamente " . $totalDeVisualizacoes . " pessoas verão o seu anúncio!";

