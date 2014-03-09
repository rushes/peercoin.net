<?php

$locale_strings['en']['languages'] = "Languages: ";
$locale_strings['en']['download_wallet'] = "Download Wallet";
$locale_strings['en']['price'] = "Price";
$locale_strings['en']['market_cap'] = "Market Cap";
$locale_strings['en']['total_supply'] = "Total Supply";
$locale_strings['en']['big_welcome_header'] = "Secure. Sustainable. <span><strong>Peercoin</strong> is here.</span>";
$locale_strings['en']['ticker_last_updated'] = "Last updated: ";
$locale_strings['en']['ticker_last_updated_never'] = "never";

$locale_strings['en']['why_peercoin_header_innovation'] = "Original <b>Innovation</b>";
$locale_strings['en']['why_peercoin_desc_innovation'] = "Peercoin's original innovation is the <a href='/bin/peercoin-paper.pdf'>proof-of-stake/proof-of-work hybrid</a> system. Like other <a href='https://en.wikipedia.org/wiki/Cryptocurrency'>cryptocurrencies</a>, initial coins can be mined, but the core network is maintained by coin holders, rather than the fastest <a href='https://en.bitcoin.it/wiki/Pooled_mining'>pool</a>.";
$locale_strings['en']['why_peercoin_header_security'] = "Increased <b>Security</b>";
$locale_strings['en']['why_peercoin_desc_security'] = "Maintaining the network through the hybrid proof-of-work/proof-of-stake algorithm reduces the risk of the <a href='http://www.pcworld.com/article/2060840/selfish-miner-attack-could-devastate-bitcoin-researchers-say.html'> Selfish-Miner Flaw</a>, <a href='https://en.bitcoin.it/wiki/Weaknesses'>51% attacks</a>, and the block bloating that have been used to exploit other currencies.";
$locale_strings['en']['why_peercoin_header_efficiency'] = "Energy and Cost <b>Efficiency</b>";
$locale_strings['en']['why_peercoin_desc_efficiency'] = "Maintaining the network requires far less energy than generating hardware-intensive proof-of-work hashes. Proof-of-stake also does away with the <a href='http://letstalkbitcoin.com/is-bitcoin-overpaying-for-false-security/'> ~$1 billion \"tax\"</a> on the Bitcoin network through proof-of-work blocks.";
$locale_strings['en']['why_peercoin_button'] = "Why Peercoin?";
$locale_strings['en']['why_peercoin_title'] = "Why <span>Peercoin</span>?";
$locale_strings['en']['why_peercoin_desc'] = "Through an innovative minting algorithm, the Peercoin network consumes far less energy, maintains stronger security, and rewards users in more sustainable ways than other cryptocurrencies.";

$locale_strings['en']['fund_peercoin'] = "Fund <span>Peercoin.</span>";
$locale_strings['en']['fund_peercoin_accepting_donations'] = "We are now accepting donations towards the Peercoin Development and Web Fund.";
$locale_strings['en']['fund_peercoin_donations_btc'] = "BTC Donations: ";
$locale_strings['en']['fund_peercoin_donations_ppc'] = "PPC Donations: ";
$locale_strings['en']['block_explorer'] = "Block Explorer";

$locale_strings['en']['faq_header'] = "Frequently <span>asked questions</span>";
$locale_strings['en']['faq_q_title_innovation'] = "Tell me more about Original Innovation.";
$locale_strings['en']['faq_q_desc_innovation'] = "
						<p>Peercoin's original and noteworthy innovation is the proof-of-stake/proof-of-work hybrid system.</p>
						<p>Like other cryptocurrencies, initial coins can be mined through the more commonly used proof-of-work hashing process. However unlike other coins, as the hashing difficulty increases over time, users continue to be rewarded with coins generated by the additional proof-of-stake algorithm. Anyone holding 1% of the currency will be compensated with 1% of all proof-of-stake coin blocks.</p>
						<p>In addition to increased security and improved energy efficiency, the hybrid proof-of-work/proof-of-stake algorithm combats the deflationary tendencies that cryptocurrencies can suffer because of their hard mintage caps.</p>";
$locale_strings['en']['faq_q_title_security'] = "Tell me more about Increased Security.";
$locale_strings['en']['faq_q_desc_security'] = "
						<p>Generating blocks through the hybrid proof-of-work/proof-of-stake algorithm reduces the risk of the Selfish-Miner Cornell Flaw, \">50%\" attacks, and the block bloating that have been used to exploit other currencies.</p>
						<p>The proof-of-stake portion of the algorithm stands at the heart of this security because it drastically raises the cost of an attack. Acquiring 51% of all existing coins requires more effort and resources than acquiring 51% of all mining power. Further, in a \">50%\" stake attack, the attacker's investment will be, by definition, at risk of great loss because the attacker will be holding a majority of the coins that they are attacking. This risk of loss reduces the incentive to attempt such an attack in the first place.</p>
						<p>Peercoin also employs other advanced security features including enforcing transaction fees at protocol level to defend against block bloating attacks.</p>";
$locale_strings['en']['faq_q_title_efficiency'] = "Tell me more about Energy and Cost Efficiency.";
$locale_strings['en']['faq_q_desc_efficiency'] = "
						<p>Generating proof-of-stake blocks requires far less energy than generating hardware-intensive proof-of-work hashes. This means that over time, the Peercoin network will consume less energy as proof-of-work blocks become less rewarding and blocks are generated instead by the proof-of-stake portion of the algorithm.</p>
				        <p>Proof-of-stake also does away with the ~$1 billion 'tax' on the Bitcoin network through proof-of-work blocks. You can read more about that <a href='http://letstalkbitcoin.com/is-bitcoin-overpaying-for-false-security/'>here</a>.</p>";
$locale_strings['en']['faq_q_title_myth1'] = "Myth #1 - Peercoin is just a clone of Bitcoin.";
$locale_strings['en']['faq_q_desc_myth1'] = "
						<p>Peercoin is one of the truly unique coins that are not just a clone of the original Bitcoin code.
				           Peercoin is the first coin to introduce a proof-of-stake/proof-of-work combination along with other energy efficient mechanisms. In fact, many altcoins are now integrating Peercoin's proof-of-stake into their codebase.
				           <br/> <br/>
						   Source: <a href='http://en.wikipedia.org/wiki/PPCoin#Distinguishing_features'>http://en.wikipedia.org/wiki/PPCoin#Distinguishing_features</a>
						</p>";
$locale_strings['en']['faq_q_title_myth2'] = "Myth #2 - Peercoin is a centralized coin because of checkpointing.";
$locale_strings['en']['faq_q_desc_myth2'] = "
						<p>Checkpoints are an additional security measure and were introduced to protect the Peercoin network from attacks when it was in its infancy. Sunny King explains:</p>
						<p>&quot;The risk of 51% denial-of-service attack on block chain is real, especially to a smaller network. In fact I wouldn’t exclude such a possibility to even bitcoin. Of course such an attack on bitcoin would likely not come from an individual due to the resource required. But it’s irresponsible to say that’s not possible. Just imagine what would happen if bitcoin stops processing transactions for a few days.&quot;</p>
						<p>As Peercoin's network has grown substantially in the past year, checkpoints will be phased out in one of the next versions, probably in PPC 0.5.</p>";
$locale_strings['en']['faq_q_title_myth3'] = "Myth #3 - Peercoin is extremely inflationary in nature.";
$locale_strings['en']['faq_q_desc_myth3'] = "
						<p>Nope. If Peercoin grows rapidly, stake minting may temporarily decrease as coin days are lost when trading. This would cause Peercoin to become deflationary. The flat nature of the transaction fees is intended to counter this by decreasing total transaction volume. Proponents of Peercoin argue that this will decrease deflation.</p>
						<p>Furthermore, Bitcoin currently experiences <a href='http://letstalkbitcoin.com/is-bitcoin-overpaying-for-false-security/'>a ~10%</a> inflation per year as it approaches its total supply of 21 million. It is <b>hoped</b> that when the total supply is reached that the transactions fees will be enough to sustain a secure network.</p>
						<p>To maintain a secure network in the future, Peercoin has a 1% a year inflation (proof-of-stake reward) to make sure there will be a secure network, no matter the transaction fees. As stated before this may become deflationary, as Bitcoin aims to be, during high volumes of transactions.</p>";

$locale_strings['en']['convinced_you_header'] = "Convinced <b>you</b>?";
$locale_strings['en']['convinced_you_desc'] = "Time to download the client, and try it yourself. If you have any questions just ask on the <a href='http://www.peercointalk.org/'>forum</a>, or the social links below.";

$locale_strings['en']['tutorials'] = "Tutorials";
$locale_strings['en']['installing_wallet'] = "Installing a Wallet";
$locale_strings['en']['setting_up_wallet'] = "Setting Up Wallet";
$locale_strings['en']['more_ellipsis'] = "More...";
$locale_strings['en']['links'] = "Links";
$locale_strings['en']['tools'] = "Tools";
$locale_strings['en']['exchanges'] = "Exchanges";
$locale_strings['en']['mining'] = "Mining";




$locale_strings['fr']['big_welcome_header'] = "Sûr. Durable. <span><strong>Peercoin</strong> est ici.</span>";



$locale_strings['es']['languages'] = "Idiomas: ";
$locale_strings['es']['download_wallet'] = "Descargar Monedero";
$locale_strings['es']['price'] = "Precio";
$locale_strings['es']['market_cap'] = "Capitalización total";
$locale_strings['es']['total_supply'] = "Suministro total";
$locale_strings['es']['big_welcome_header'] = "Seguro. Sostenible. <span><strong>Peercoin</strong> está aquí.</span>";
$locale_strings['es']['ticker_last_updated'] = "Última actualización: ";
$locale_strings['es']['ticker_last_updated_never'] = "nunca";

$locale_strings['es']['why_peercoin_header_innovation'] = "<b>Innovación</b> original";
$locale_strings['es']['why_peercoin_desc_innovation'] = "La innovación original de Peercoin es el sistema <a href='/bin/peercoin-paper-es.pdf'>híbrido proof-of-stake/proof-of-work</a>. Como en otras <a href='https://en.wikipedia.org/wiki/Cryptocurrency'>criptomonedas</a>, las monedas iniciales pueden ser minadas, pero la red principal está mantenida por los propietarios de monedas, en lugar de los <a href='https://en.bitcoin.it/wiki/Pooled_mining'>pools</a> más rápidos.";
$locale_strings['es']['why_peercoin_header_security'] = "Más <b>Seguro</b>";
$locale_strings['es']['why_peercoin_desc_security'] = "Manteniendo la red a través del algoritmo híbrido proof-of-work/proof-of-stake, se reduce el riesgo de aprovechamiento del <a href='http://www.pcworld.com/article/2060840/selfish-miner-attack-could-devastate-bitcoin-researchers-say.html'> defecto de Minero Egoísta</a>, los <a href='https://en.bitcoin.it/wiki/Weaknesses'>ataques del 51%</a>, y el hinchado de monedas que se ha usado para atacar a otras monedas.";
$locale_strings['es']['why_peercoin_header_efficiency'] = "<b>Eficiencia</b> y reducción del coste energético";
$locale_strings['es']['why_peercoin_desc_efficiency'] = "El mantenimiento de la red requiere mucha menos energía que la generación de hashes proof-of-work mediante hardware especializado. El Proof-of-stake también se deshace del <a href='http://letstalkbitcoin.com/is-bitcoin-overpaying-for-false-security/'> \"impuesto\"de ~$1000 millones </a> de la red Bitcoin mediante bloques proof-of-work.";
$locale_strings['es']['why_peercoin_button'] = "¿Por qué Peercoin?";
$locale_strings['es']['why_peercoin_title'] = "¿Por qué <span>Peercoin</span>?";
$locale_strings['es']['why_peercoin_desc'] = "Mediante un innovativo algoritmo de acuñado, la red Peercoin consume mucha menos energía, tiene una seguridad más fuerte, y recompensa a sus usuarios de una manera más sostenible que otras criptomonedas.";

$locale_strings['es']['fund_peercoin'] = "Financia <span>Peercoin.</span>";
$locale_strings['es']['fund_peercoin_accepting_donations'] = " Aceptamos donaciones para el desarrollo de Peercoin y la página web.";
$locale_strings['es']['fund_peercoin_donations_btc'] = "Donaciones con BTC: ";
$locale_strings['es']['fund_peercoin_donations_ppc'] = "Donaciones con PPC: ";
$locale_strings['es']['block_explorer'] = "Explorador de bloques";

$locale_strings['es']['faq_header'] = "<span>Preguntas</span> frecuentes";
$locale_strings['es']['faq_q_title_innovation'] = "Cuéntame más acerca de la Innovación Original.";
$locale_strings['es']['faq_q_desc_innovation'] = "
						<p>La más notoria innovación original de Peercoin es el sistema híbrido proof-of-stake/proof-of-work.</p>
						<p>Como otras criptomonedas, las monedas iniciales pueden ser minadas con el sistema tradicional de procesado de hashing mediante el proof-of-work. Sin embargo, a diferencia de otras monedas, mientras la dificultad de hashing aumenta con el tiempo, los usuarios continúan siendo recompensados con monedas generadas con el algoritmo adicional del proof-of-stake. Cualquiera que tenga moneda, será recompensado con un 1% del total mediante bloques proof-of-stake.</p>
						<p>Adicionalmente al aumento de seguridad in la mejorada eficiencia energética, el sistema híbrido del algoritmo proof-of-work/proof-of-stake combate las tendencias deflacionarias que las criptomonedas pueden sufrir debido a su tope de acuñado preestablecido.</p>";
$locale_strings['es']['faq_q_title_security'] = "Cuéntame más acerca de la Seguridad Mejorada.";
$locale_strings['es']['faq_q_desc_security'] = "
						<p>La generación de bloques mediante el algoritmo híbrido proof-of-work/proof-of-stake reduce el riesgo del defecto del Minero Egoísta de Cornell, ataques de\">50%\", y el hinchado de bloques que se ha usado para aprovecharse de otras monedas.</p>
						<p>La porción proof-of-stake del algoritmo está en el corazón de las medidas de seguridad porque aumenta considerablemente el coste de un ataque. Adquirir el 51% de todas las monedas existentes requiere más esfuerzo y recursos que adquirir el 51% de todo el poder de minado. Además, en un ataque stake de \">50%\", la inversión del atacante será, por definición, un gran riesgo de pérdida, porque el atacante tendrá la mayoría de monedas que está atacando. Este riesgo de pérdida reduce el incentivo de intentar ese tipo de ataque en primer lugar.</p>
						<p>Peercoin también emplea otras medidas de seguridadad avanzadas, como forzar tasas de transacción a nivel de protocolo para defenderse de ataques de hinchado de monedas.</p>";
$locale_strings['es']['faq_q_title_efficiency'] = "Cuéntame más acerca de la eficiencia energética.";
$locale_strings['es']['faq_q_desc_efficiency'] = "
						<p>La generación de bloques mediante proof-of-stake requiere mucha menos energía que generar hashes con hardware especializado mediante el proof-of-work. Esto significa que con el tiempo, la red Peercoin consumirá mucha menos energía a medida que los bloques generados mediante proof-of-work salgan menos a cuenta que los bloques generados mediante la porción del algoritmo del proof-of-stake.</p>
				        <p>Además el Proof-of-stake se deshace del 'impuesto de ~$1000 millones de la red Bitcoin mediante los bloques proof-of-work. Puedes leer más acerca de esto <a href='http://letstalkbitcoin.com/is-bitcoin-overpaying-for-false-security/'>aquí</a>.</p>";
$locale_strings['es']['faq_q_title_myth1'] = "Mito #1 - Peercoin es sólo un clon de Bitcoin.";
$locale_strings['es']['faq_q_desc_myth1'] = "
						<p>Peercoin es una de las pocas monedas únicas que no son sólo un clon del código de Bitcoin.
				           Peercoin es la primera moneda en introducir una combinación de proof-of-stake/proof-of-work junto con otros mecanismos energéticamente eficientes. De hecho, muchas monedas alternativas están integrando hoy en día en sus códigos el proof-of-stake de Peercoin.
				           <br/> <br/>
						   Fuente: <a href='http://en.wikipedia.org/wiki/PPCoin#Distinguishing_features'>http://en.wikipedia.org/wiki/PPCoin#Distinguishing_features</a>
						</p>";
$locale_strings['es']['faq_q_title_myth2'] = "Mito #2 - Peercoin es una moneda centralizada debido a los puntos de control.";
$locale_strings['es']['faq_q_desc_myth2'] = "
						<p>Los puntos de control centralizados son una medida de seguridad adicional y fueron introducidos para proteger la red Peercoin de ataques mientras la red está en su infancia. Sunny King lo explica:</p>
						<p>&quot;El riesgo de un ataque de denegación de servicio del 51% en la cadena de bloques es real, especialmente en una red pequeña. De hecho, no excluyo esta posibilidad incluso en la red Bitcoin. Por supuesto tal ataque a Bitcoin no vendría de una persona individual debido a la cantidad de recursos necesarios para llevar a cabo tal ataque. Pero sería irresponsable decir que no es una posibilidad real. Tan sólo hace falta imaginar qué pasaría si la red dejara de procesar transacciones por unos pocos días.&quot;</p>
						<p>Ya que la red Peercoin ha crecido sustancialmente durante el pasado año, los puntos de control se eliminarán gradualmente en una de las próximas versiones de Peercoin, probablemente la 0.5.</p>";
$locale_strings['es']['faq_q_title_myth3'] = "Mito #3 - Peercoin tiene una naturaleza extremadamente inflacionara.";
$locale_strings['es']['faq_q_desc_myth3'] = "
						<p>No. Si Peercoin crece rápidamente, el acuñado mediante Stake se reducirá temporalmente mientras los días de moneda se pierden debido al comercio de éstas. Esto causaría que Peercoin fuera deflacionarioy. La naturaleza de las tasas de transacción fijadas se diseñaron como medida de contrarestar esto, reduciendo el volumen de total de transacciones. Los defensores de Peercoin argumentan que esto disminuirá la deflación.</p>
						<p>Además, Bitcoin experimenta actualmente <a href='http://letstalkbitcoin.com/is-bitcoin-overpaying-for-false-security/'>un ~10%</a> de inflación anual mientras de acerca a su suministro total de 21 millones de monedas. Se <b>espera</b> que cuando se alcance el suministro total de monedas las tasas de transacción serán suficientes para mantener una red segura.</p>
						<p>Para mantener una red segura en el futuro, Peercoin provee una inflación anual del 1% (recompensa por proof-of-stake) para asegurarse que habrá una red segura, independientemente de las tasas de transacción. Como se ha comentado antes, esto volverá la moneda deflacionaria, igual que Bitcoin pretende ser, durante niveles de transacciones altos.</p>";

$locale_strings['es']['convinced_you_header'] = "¿<b>Convencido</b>?";
$locale_strings['es']['convinced_you_desc'] = "Es hora de descargar el cliente y probarlo tú mismo. Si tienes alguna duda simplemente pregunta en el <a href='http://www.peercointalk.org/'>foro</a>, o los enlaces a redes sociales de más abajo.";

$locale_strings['es']['tutorials'] = "Tutoriales";
$locale_strings['es']['installing_wallet'] = "Instalar monedero";
$locale_strings['es']['setting_up_wallet'] = "Configurar monedero";
$locale_strings['es']['more_ellipsis'] = "Más...";
$locale_strings['es']['links'] = "Enlaces";
$locale_strings['es']['tools'] = "Herramientas";
$locale_strings['es']['exchanges'] = "Exchanges";
$locale_strings['es']['mining'] = "Minado";
