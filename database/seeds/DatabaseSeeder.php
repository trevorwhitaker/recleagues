<?php

use Illuminate\Database\Seeder;

use App\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CityTableSeeder::class);
    }
}

class CityTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('cities')->delete();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = '100 Mile House';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = '108 Mile House';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = '108 Mile Ranch';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = '150 Mile House';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Abbey';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Abbotsford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Aberarder';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Abercorn';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Aberdeen';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Abernethy';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Abitibi Canyon';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Acadia Valley';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Acme';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Acton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Acton Vale';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Adamsville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Adolphustown';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Advocate Harbour';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Agassiz';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Agassiz Provincial Forest';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Aguanish';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ahousat';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ailsa Craig';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Airdrie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ajax';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Aklavik';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Alameda';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Alban';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Albanel';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Albert';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Albert Mines';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Alberta Beach';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Alberton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Alder Flats';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Aldergrove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Alderville First Nation';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Alert Bay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Alexander';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Alexandria';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Alexis Creek';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Alfred';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Algoma Mills';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Alida';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Alix';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Alkali Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Allan';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Allardville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Alliance';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Alliston';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Alma';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Alma';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Almonte';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Alonsa';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Alouette';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Alsask';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Altario';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Altona';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Alvena';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Alvinston';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Amherst';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Amherstburg';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Amos';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Amqui';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ancaster';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Andrew';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Aneroid';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Angliers';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Angus';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Anjou';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Annapolis Royal';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Anse-Saint-Jean';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Antigonish';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Anzac';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Appleton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Apsley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Arborfield';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Arborg';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Archerwill';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Arcola';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Arden';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ardrossan';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Argentia';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Argyle';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Arichat';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Arkell';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Arkona';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Armagh';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Armstrong';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Armstrong';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Arnold`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Arnprior';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Arrowwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Arthur';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Arundel';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Arviat';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Asbestos';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ascot';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ascot Corner';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ashcroft';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Ashern';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ashmont';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ashuapmushuan';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Asquith';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Assiniboia';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Assumption';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Aston-Jonction';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Athabasca';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Athens';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Atikokan';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Atlin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Attawapiskat';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Atwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Auburn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Aurora';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Austin';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Avola';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Avondale';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Avonlea';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Avonmore';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ayer`s Cliff';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Aylesford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Aylmer';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Aylmer';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ayr';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ayton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Azilda';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Baddeck';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Baden';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Badger';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bagotville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Baie Verte';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-Comeau';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-de-Shawinigan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-des-Sables';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-du-Febvre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-d`Urfe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-Johan-Beetz';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-Sainte-Catherine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-St-Paul';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Baie-Ste-Anne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Baie-Trinite';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bailieboro';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Baker Brook';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Baker Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bala';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Balcarres';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Baldur';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Balfour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Balgonie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Balmertown';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Balmoral';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Baltimore';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bamfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bancroft';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Banff';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Barachois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Barkmere';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Barons';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Barraute';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Barrhead';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Barrie';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Barriere';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Barry`s Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Barwick';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bashaw';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Bass River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bassano';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Basswood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Batawa';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Batchawana Bay';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Bath';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bath';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Bathurst';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Batiscan';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Batteau';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Battle Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Battleford';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bauline';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bawlf';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bay Bulls';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bay de Verde';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bay L`Argent';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bay Roberts';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bayfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Baysville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Beach Grove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Beachburg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Beachville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beaconsfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Beamsville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bear Canyon';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bear Lake';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Bear River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Beardmore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bearskin Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bearskin Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bear`s Passage';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beaucanton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beauceville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beauharnois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beaulac-Garthby';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Beaumont';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Beaumont';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beaumont';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beauport';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beaupre';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Beausejour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Beauval';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Beaver Cove';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Beaver Creek';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Beaverdell';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Beaverlodge';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Beaverton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Becancour';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Bedeque';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bedford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Beechy';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Beeton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Beiseker';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bell Island';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bella Bella';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bella Coola';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Belle Neige';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Belle River';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Belledune';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bellefeuille';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Belleoram';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Belleterre';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Belleville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bellevue';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Belmont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Belmont';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Beloeil';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Bengough';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Benito';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Benoit`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bentley';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Berens River';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Beresford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bergeronnes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Berthierville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Berwick';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Berwyn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bethany';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bethesda';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Bethune';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Betsiamites';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Beulah';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Biencourt';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Bienfait';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Big River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Big Trout Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Big Valley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Biggar';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Binbrook';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bindloss';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Binscarth';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Birch Hills';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Birch Island';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Birchy Bay';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Birsay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Birtle';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Biscotasing';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bishopton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bishop`s Falls';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Bissett';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Black Creek';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Black Diamond';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Black Duck Cove';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Black Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Black Point';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Black Tickle';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Blackfalds';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Blackie';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Blacks Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Blackstock';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Blackville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Blaine Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Blainville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Blanc-Sablon';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Blandford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Blenheim';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Blezard Valley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Blind River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bloomfield';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Blue Ridge';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Blue River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Blyth';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bob Quinn Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bobcaygeon';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Boiestown';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bois-des-Filion';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Boisbriand';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Boischatel';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Boisdale';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Boissevain';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bolton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bon Accord';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bonanza';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bonaventure';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Bonavista';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bonfield';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bonne-Esperance';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bonnyville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Borden';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Borden';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Borden';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Boston Bar';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Boswell';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bothwell';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Botwood';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Boucherville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bouchette';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Bouctouche';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Boularderie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bourget';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bow Island';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bowden';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bowen Island';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bowmanville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bowser';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Boyd`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Boyle';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bracebridge';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bradford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bradford West Gwillimbury';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Braeside';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bragg Creek';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brampton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Branch';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Brandon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brantford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Breakeyville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brechin';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Bredenbury';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Brent`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Breslau';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Breton';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Bridge Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bridgenorth';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Bridgetown';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Bridgewater';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Briercrest';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brigden';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Brigham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bright';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brighton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brights Grove';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Brigus';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Britannia Beach';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Britt';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Broadview';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Brochet';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Brock';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Brocket';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brockville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Brome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bromont';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bromptonville';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Brookdale';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Brookfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brooklin';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Brooks';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Brossard';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Browns Flat';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Brownsburg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brownsville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Brownvale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Bruce Mines';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Bruderheim';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Bruno';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Brussels';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bryson';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Buchanan';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Buchans';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Buckhorn';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Buckingham';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Buffalo Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Burdett';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Burford';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Burgeo';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Burgessville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Burin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Burk`s Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Burleigh Falls';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Burlington';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Burlington';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Burnaby';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Burns Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Burnt Islands';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Burstall';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Burwash Landing';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Bury';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Byemoor';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cabano';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cabri';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cache Bay';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Cache Creek';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cacouna';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cadillac';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cadillac';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cadomin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Calabogie';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Calder';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Caledon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Caledon East';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Caledonia';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Calgary';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Callander';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Calling Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Calmar';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Calstock';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Calumet';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cambray';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cambridge';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Cambridge Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cameron';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Camlachie';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Campbell River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Campbellford';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Campbellton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Campbellton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Campbellville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Campbell`s Bay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Camperville';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Campobello Island';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Camrose';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Canal Flats';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Candiac';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Canmore';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Canning';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cannington';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Canoe Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Canora';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Canso';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Canterbury';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cantley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Canwood';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-a-l`Aigle';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-aux-Meules';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-Chat';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-de-la-Madeleine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-des-Rosiers';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Cap-Pele';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-Rouge';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cap-Saint-Ignace';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Cape Broyle';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Cape Dorset';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Caplan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Capreol';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Caradoc First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Caramat';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Caraquet';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Carberry';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Carbon';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Carbonear';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Carcross';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cardiff';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Cardigan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cardinal';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cardston';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cargill';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Caribou';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Carievale';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Carignan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Carillon';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Carleton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Carleton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Carleton Place';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Carlyle';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Carmacks';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Carman';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Carmangay';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Carmanville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Carnarvon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Carnduff';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Caroline';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Caron';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Carp';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Carrot River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Carseland';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Carstairs';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cartier';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Cartwright';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Cartwright';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Casselman';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Cassiar';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Castlegar';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Castlemore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Castleton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Castor';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cat Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Catalina';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Causapscal';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cavan';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cayley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cayuga';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Celista';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Central Butte';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Centralia';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Centreville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Centreville-Wareham-Trinity';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cereal';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cessford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ceylon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chalk River';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chambly';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chambord';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Champion';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Champlain';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Chance Cove';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chandler';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Change islands';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chapais';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chapeau';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Chapel Arm';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chapleau';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Chaplin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Charette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Charlemagne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Charlesbourg';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Charlevoix';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Charlottetown';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Charlottetown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Charlton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Charny';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chartierville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Chase';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chateau-Richer';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chateauguay';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Chatham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chatham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chatsworth';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Chauvin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chelmsford';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Chelsea';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chelsea';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Chemainus';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cheneville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chesley';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Chester';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Chesterfield Inlet';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Chestermere';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chesterville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chesterville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Cheticamp';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Chetwynd';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Cheverie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chevery';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chibougamau';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chicoutimi';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chiefs Point First Nation';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Chilliwack';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Chipewyan Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Chipman';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Chipman';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chippewas of Kettle/Stony Poin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Chippewas Of Sarnia First Nati';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chisasibi';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Choiceland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chomedey';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Christian Island';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Christina Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Christopher Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Churchbridge';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Churchill';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Churchill Falls';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chute-aux-Outardes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Chute-des-Passes';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Clair';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Clairmont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Claremont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clarence Creek';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clarence-Rockland';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Clarenville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Clarenville-Shoal Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Claresholm';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clarington';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Clarke`s Beach';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Clarks Corners';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clarkson';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Clarksville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Clark`s Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Clavet';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Clearwater';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clearwater Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Clericy';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Clermont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clifford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Climax';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Clinton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Clinton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Clive';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cloridorme';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cloud Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Clova';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Clyde';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Coaldale';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Coalhurst';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Coaticook';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cobalt';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Cobble Hill';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cobden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Coboconk';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cobourg';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Cocagne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cochenour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cochin';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cochrane';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cochrane';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Coderre';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Codroy';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Coe Hill';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Colborne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Colchester';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cold Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cold Springs';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Coldwater';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Coleville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Colliers';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Collingwood';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Collingwood Corner';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Colombier';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Colonsay';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Colwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Comber';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Come By Chance';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Comfort Cove-Newstead';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Comox';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Compton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Conception Bay South';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Conception Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Conche';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Concord';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Coniston';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Conklin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Connaught';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Conne River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Conquest';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Consort';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Constance Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Constance Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Consul';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Contrecoeur';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cookshire';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cookstown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cooksville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Cook`s Harbour';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Coquitlam';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Coral Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Cormorant';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Corner Brook';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cornwall';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Cornwall';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Coronach';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Coronation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Corunna';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cote-St-Luc';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Coteau-du-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cottam';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Cottlesville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Courcelette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Courcelles';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Courtenay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Courtice';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Courtright';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Coutts';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Covehead';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Cow Head';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Cowan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Cowansville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Cowichan Bay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cowley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Crabtree';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Craigmyle';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Craik';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Cranberry Portage';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Cranbrook';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Crandall';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Crapaud';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Crawford Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Crediton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Creelman';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Creemore';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Creighton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Cremona';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Crescent Beach';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Creston';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Cross Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Crossfield';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Crowsnest Pass';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Crysler';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Crystal Beach';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Crystal City';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cudworth';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Cumberland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Cumberland';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cumberland House';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cupar';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Cupids';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Cut Knife';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Cypress River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Czar';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Dalhousie';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dalmeny';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Daniel`s Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Danville';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Darlingford';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Dartmouth';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dashwood';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Dauphin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Daveluyville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Davidson';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Davis Inlet';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Dawson';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Dawson Creek';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Daysland';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Dease Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Deauville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Debden';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Debec';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Debert';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'DeBolt';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Deep River';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Deer Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Deer Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Deerbrook';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Degelis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Delaware of the Thames(Moravia';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Delburne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Delhi';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Delia';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Delisle';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Delisle';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Deloraine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Delson';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Delta';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Delta';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Denbigh';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Denzil';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Derwent';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Desbarats';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Desbiens';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Deschaillons-sur-Saint-Laurent';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Deseronto';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Destruction Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Deux-Montagnes';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Deux-Rivieres';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Devlin';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Devon';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Dewberry';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Didsbury';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Dieppe';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Digby';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dillon';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Dingwall';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dinsmore';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Disraeli';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Dixonville';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Doaktown';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dodsland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dokis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dokis First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Dolbeau-Mistassini';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Dollard-des-Ormeaux';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Dominion City';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Domremy';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Donald';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Donalda';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Donnacona';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Donnelly';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Dorchester';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dorchester';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dorion';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dorset';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Dorval';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Douglas';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Douglas Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Douglastown';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Dover';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Drake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Drayton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Drayton Valley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dresden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Drumbo';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Drumheller';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Drummondville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dryden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dublin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dubreuilville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dubuc';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Dubuisson';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Duchess';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Duck Lake';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Dugald';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Duncan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dunchurch';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dundalk';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dundas';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Dundee';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dundurn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dungannon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Dunham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dunnville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dunsford';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Dunster';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Duparquet';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Dupuy';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Durham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dutton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Duvernay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dwight';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Dyer`s Bay';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Dysart';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'D`Arcy';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Eagle Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Eagle River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Eaglesham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ear Falls';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Earl Grey';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Earlton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'East Angus';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'East Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'East Broughton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'East Coulee';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'East Farnham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'East Gwillimbury';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'East Hereford';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'East Pine';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'East Point';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'East York';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Eastend';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Easterville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Eastmain';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Eastman';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Eastport';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Eastwood';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Eatonia';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Echo Bay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Eckville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Ecum Secum';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Edam';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Eddystone';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Edgerton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Edmonton';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Edmundston';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Edson';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Edwin';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Edzo';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Eganville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Elbow';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Eldon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Elfros';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Elgin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elgin';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Elie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elizabethtown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elk Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Elk Point';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Elkford';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Elkhorn';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Elko';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Elkwater';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elliot Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Elliston';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Elm Creek';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elmira';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Elmsdale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elmvale';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Elnora';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Elora';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Elrose';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Embree';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Embro';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Embrun';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Emerson';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Emeryville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Emo';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Empress';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Emsdale';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Enchant';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Enderby';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Englee';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Englehart';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'English Harbour East';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Enterprise';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Enterprise';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Entrelacs';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Erickson';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Eriksdale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Erin';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Eskasoni';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Espanola';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Essex';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Estaire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Esterel';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Esterhazy';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Estevan';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Estevan Point';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Eston';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Ethelbert';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Etobicoke';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Etzikom';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Eugenia';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Evain';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Evansburg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Exeter';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Exshaw';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Eyebrow';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fabre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fabreville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Fair Haven';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fairmont Hot Springs';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fairview';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Falardeau';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Falcon Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Falher';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Falkland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Farnham';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Faro';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fassett';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fauquier';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fauquier';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Faust';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fenelon Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fenwick';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fergus';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ferintosh';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ferland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ferme-Neuve';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Fermeuse';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fermont';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fernie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Feversham';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Field';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Field';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Fillmore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Finch';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fingal';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Fisher Branch';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Fisher River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fisherville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Flamborough';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Flanders';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Flatbush';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Flatrock';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Flatrock';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Fleming';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Flesherton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Fleur de Lys';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fleurimont';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Flin Flon';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Florenceville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Flower`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Foam Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Fogo';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Foley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Foleyet';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Fond-du-Lac';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Fords Mills';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Foremost';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Forest';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Forest Grove';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Forestburg';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Forestville';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Fork River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort Albany';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort Assiniboine';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort Chipewyan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort Erie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort Frances';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fort Fraser';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Fort Good Hope';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort Hope';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Fort Liard';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort MacKay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort Macleod';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort McMurray';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Fort McPherson';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fort Nelson';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Fort Providence';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Fort Qu`Appelle';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort Saskatchewan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort Severn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort Severn First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Fort Simpson';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Fort Smith';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fort St. James';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fort St. John';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fort Vermilion';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Fort William First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fort-Coulonge';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Forteau';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fortierville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Fortune';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fossambault-sur-le-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Fox Cove-Mortier';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fox Creek';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Fox Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Fox Valley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Foxboro';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Foxwarren';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Foymount';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Frampton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Francis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Frankford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Franklin Centre';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fraser Lake';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Fredericton';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Fredericton Junction';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Freelton';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Freeport';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Frelighsburg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'French River First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'French Village';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Frenchmans Island';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Freshwater';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Frobisher';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Frontier';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Fruitvale';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Fugereville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Gabarus';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Gabriola';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Gadsby';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Gagetown';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Gainsborough';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Galahad';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Galiano Island';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Galt';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Gambo';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gananoque';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Gander';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ganges';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Garden Hill';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Garden River First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Garnish';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Garson';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Gaspe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Gatineau';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Gaultois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Gentilly';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Georgetown';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Georgetown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Georgina';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Geraldton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Gibbons';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Gibsons';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Gift Lake';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gilbert Plains';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gillam';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gilmour';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gimli';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Girardville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Girouxville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Giscome';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Gjoa Haven';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Glace Bay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gladstone';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Glaslyn';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Glassville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Gleichen';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Glen Ewen';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Glen Robertson';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Glen Water';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Glen Williams';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Glenavon';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Glenboro';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Glencoe';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Glendon';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Glenella';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Glenwood';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Glenwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gloucester';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Glovertown';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Godbout';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Goderich';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gods Lake Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gogama';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Gold Bridge';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Gold River';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Goldboro';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Golden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Golden Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Good Hope Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gooderham';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Goodeve';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Goodsoil';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Goose Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gore Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gormley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gorrie';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Goshen';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Goulais River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Govan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gowganda';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Gracefield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Grafton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Granby';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Grand Bank';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Grand Bay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Grand Beach';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Grand Bend';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grand Centre';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Grand Etang';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Grand Falls';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Grand Falls';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Grand Falls-Windsor';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Grand Forks';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Grand Lake';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Grand Manan';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Grand Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Grand Rapids';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Grand Valley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grand-Mere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grand-Remous';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Grand-Sault';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grande Cache';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grande Prairie';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Grande-Anse';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grande-Entree';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grande-Riviere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grande-Vallee';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grandes-Bergeronnes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grandes-Piles';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Grandview';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Granisle';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Granton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Granum';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Grasmere';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grassland';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grassy Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Grassy Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Grassy Narrows First Nation';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Grassy Plains';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Gravelbourg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gravenhurst';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Grayson';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Great Harbour Deep';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Great Village';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Green Island Cove';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Green Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Greenfield Park';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Greenspond';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Greensville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Greenville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Greenwood';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Greenwood';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Grenfell';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Grenville';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gretna';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Grimsby';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grimshaw';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Grouard';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Guelph';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Guigues';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gull Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Gull Bay First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Gull Lake';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Guysborough';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Gypsumville';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Hadashville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hafford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hagersville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hague';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Haileybury';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Haines Junction';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hairy Hill';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Haldimand';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Haliburton';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Halifax';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Halkirk';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Halton Hills';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ham-Nord';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hamilton';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Hamiota';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hammond';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hampden';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Hampstead';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hampstead';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Hampton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hampton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hanley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hanmer';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hanna';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hanover';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Hantsport';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hant`s Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Happy Valley-Goose Bay';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Harbour Breton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Harbour Grace';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Harbour Main-Chapel Cove-Lakev';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hardisty';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hare Bay';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Harewood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Harrietsville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Harrington Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Harris';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Harriston';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Harrow';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Harrowsmith';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Hartland';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hartley Bay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Hartney';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hastings';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Havelock';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Havelock';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Havre-Aubert';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Havre-aux-Maisons';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Havre-St-Pierre';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hawarden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hawk Junction';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hawkesbury';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hawke`s Bay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hay Lakes';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Hay River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hays';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hazelton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hazlet';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hearst';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Heart`s Content';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Heart`s Delight-Islington';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Heart`s Desire';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Heatherton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hebertville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hebertville-Station';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Hecla';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hedley';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Heinsburg';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Heisler';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hemlo';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hemlock Valley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hemmingford';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hendrix Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Henryville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hensall';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Henvey Inlet First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hepburn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hepworth';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Herbert';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Herschel';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hespeler';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hickman`s Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hickson';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'High Level';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'High Prairie';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'High River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Highgate';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hilda';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hillgrade';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Hillsborough';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hillsburgh';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hillview';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hines Creek';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hinton';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hixon';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hobbema';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hodgeville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Holberg';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Holden';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Holdfast';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Holland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Holland Landing';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Holstein';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Holyrood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Honey Harbour';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hope';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Hopedale';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Hopewell';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hornepayne';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Horsefly';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Houston';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Howick';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Howley';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Hoyt';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Hubbards';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Hudson';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hudson';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Hudson Bay';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Hudson`s Hope';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hughenden';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Hull';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Humber Arm South';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Humboldt';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Humphrey';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Hunter River';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Huntingdon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Huntsville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hussar';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Hythe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Iberville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ignace';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ilderton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ile-a-la-Crosse';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ile-aux-Coudres';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Iles-de-la-Madeleine';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Ilford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Imperial';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Indian Head';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Indian Tickle';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ingersoll';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ingleside';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Ingonish';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Innerkip';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Innisfail';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Innisfil';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Innisfree';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Inukjuak';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Inuvik';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Inverary';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Invermay';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Invermere';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Inverness';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Inverness';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Inwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Inwood';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Iqaluit';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Irma';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Iron Bridge';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Iron Springs';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Iroquois';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Iroquois Falls';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Irricana';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Irvine';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Iskut';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Island Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Island Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Islay';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Isle aux Morts';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ituna';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Jackson`s Arm';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Jacquet River';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Jaffray';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Jaffray Melick';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Jamestown';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Jansen';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Jarvie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Jarvis';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Jasper';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Jasper';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Jean Marie River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Jellicoe';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Jenner';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Jockvale';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Joe Batt`s Arm-Barr`d Islands-';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Johnstown';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Joliette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Jonquiere';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Jordan';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Joussard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Joutel';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Kakisa';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kaministiquia';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kamiskotia';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kamloops';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kamsack';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Kananaskis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kanata';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kangiqsualujjuaq';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kangirsuk';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kapuskasing';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kasabonika First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kashechewan First Nation';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kaslo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kateville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kazabazua';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kearney';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Kedgwick';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Keene';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Keephills';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Keewatin';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Keg River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kelliher';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kelowna';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kelvington';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Kelwood';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kemano';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kemptville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kenaston';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kennedy';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Kennetcook';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kenora';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kenosee';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Kensington';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kent Centre';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Kenton';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Kentville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Kenzieville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Keremeos';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kerrobert';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kerwood';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Keswick';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Keswick';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Ketch Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Key Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Killaloe';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Killam';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Killarney';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Killarney';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kimberley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kincaid';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kincardine';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kincolith';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kindersley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'King City';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kingfisher Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kingfisher Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kingsbury';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kingsey Falls';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Kingston';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kingston';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kingsville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'King`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'King`s Point';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kinistino';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kinmount';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kintore';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Kinuso';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kipling';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Kippens';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kirkfield';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kirkland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kirkland Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kirkton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kisbey';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kitchener';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kitimat';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kitkatla';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kitsault';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Kitscoty';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kitwanga';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Kleinburg';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Klemtu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Knowlton';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Kugluktuk';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Kuujjuaq';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Kyle';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Kyuquot';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Baie';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'La Broquerie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Corne';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'La Crete';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Dore';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Grande';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Guadeloupe';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'La Loche';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Malbaie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Martre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Minerve';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Patrie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Plaine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Pocatiere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Prairie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Reine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Romaine';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'La Ronge';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Sarre';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'La Scie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'La Tuque';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Labelle';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Labrador City';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Lac Brochet';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Lac du Bonnet';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac Kenogami';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lac La Biche';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lac la Croix';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lac la Hache';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lac Seul First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-au-Saumon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-aux-Sables';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Bouchette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Brome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Delage';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-des-Ecorces';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Drolet';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-du-Cerf';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Edouard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Etchemin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Frontiere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Poulin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Saguay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-Sergent';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lac-St-Joseph';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lachenaie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lachine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lachute';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lacolle';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lacombe';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Ladle Cove';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ladysmith';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lafleche';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lafontaine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lafontaine';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lagoon City';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'LaHave';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Laird';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lake Alma';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Lake Charlotte';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lake Cowichan';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lake Lenore';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lake Louise';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lake Megantic';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lakefield';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lamaline';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lambeth';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lambton';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Lameque';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lamont';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lampman';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lanark';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lancaster';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Landis';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lang';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Langara';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Langdon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Langenburg';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Langham';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Langley';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Langruth';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Langton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lanigan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lanoraie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lansdowne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lansdowne House';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lantzville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Larder Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lark Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Larrys River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'LaSalle';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'LaSalle';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lashburn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Latchford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laterriere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Latulipe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laurentides';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laurier-Station';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laurierville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laval';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laval des Rapides';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laval Ouest';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lavaltrie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Laverlochere';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lavoy';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lawn';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Lawrencetown';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lawrenceville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Le Bic';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Le Gardeur';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Leader';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Leaf Rapids';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Leamington';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Leask';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lebel-sur-Quevillon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Leclercville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Leduc';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lefroy';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Legal';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lemberg';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'LeMoyne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lennoxville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Leoville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Leroy';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lery';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Les Boules';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Les Cedres';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Les Coteaux';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Les Eboulements';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Les Escoumins';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Les Mechins';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Leslieville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lestock';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lethbridge';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Levack';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Levis';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lewisporte';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Libau';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Liberty';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Likely';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lillooet';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Limerick';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lincoln';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lindsay';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lintlaw';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Linwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lion`s Head';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lipton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Listowel';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Little Bay';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Little Bay Islands';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Little Britain';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Little Burnt Bay';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Little Catalina';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Little Current';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Little Fort';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Little Grand Rapids';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Little Heart`s Ease';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lively';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Liverpool';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lloydminster';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lloydminster';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Lockeport';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Lockport';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lodgepole';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Logan Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Logy Bay-Middle Cove-Outer Cov';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lombardy';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lomond';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'London';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Long Harbour-Mount Arlington H';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Long Lac';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Long Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Long Point';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Long Pond';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Long Sault';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Longlac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Longueuil';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Longview';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Loon Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Loos';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Loreburn';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Loretteville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lorne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lorraine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lorrainville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Lougheed';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Louisbourg';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Louisdale';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Louiseville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lourdes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lourdes de Blanc Sablon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Louvicourt';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Low';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lower Island Cove';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lower Post';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lucan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Luceville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lucknow';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lucky Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lumby';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Lumsden';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Lumsden';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Lundar';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Lunenburg';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Luseland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Luskville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lyn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Lynden';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Lynn Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Lyster';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Lytton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Acadie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ancienne-Lorette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ange-Gardien';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Annonciation';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'L`Anse-au-Loup';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'L`Ardoise';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Assomption';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Avenir';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Epiphanie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ile-Aux-Noix';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ile-Bizard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ile-Cadieux';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ile-Dorval';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ile-d`Entree';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Ile-Perrot';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Île-Verte';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'L`Islet';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'L`Orignal';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ma-Me-O Beach';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Maberly';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Mabou';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Macamic';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Maccan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Macdiarmid';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Maces Bay';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'MacGregor';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Mackenzie';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Macklin';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Macrorie';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'MacTier';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Madoc';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Madsen';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Mafeking';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Magnetawan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Magnetawan First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Magog';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Magrath';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Mahone Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Maidstone';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Maidstone';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Main Brook';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Maitland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Maitland';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Makkovik';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Malartic';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mallorytown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Malton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Manic-Cinq';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Manigotagan';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Manitou';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Manitouwadge';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Manitowaning';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Maniwaki';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Mankota';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Manning';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Mannville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Manor';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Manotick';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Manouane';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Manseau';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mansonville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Manyberries';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Maple';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Maple Creek';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Maple Grove';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Maple Ridge';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Marathon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Marcelin';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Margaree Forks';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Margo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Maria';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Marieville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Marion Bridge';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Markdale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Markham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Markstay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Marlboro';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Marmora';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Marquis';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Marsden';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Marsh Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Marshall';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Marsoui';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Marten Falls First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Marten River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Martensville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Martintown';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Marwayne';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Maryfield';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Marystown';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Mary`s Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mascouche';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Maskinonge';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Masset';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Massey';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Massey Drive';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Masson-Angers';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Massueville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mastigouche';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Matachewan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Matagami';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Matane';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Matapedia';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Matheson';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mattawa';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mattice';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Maxville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Mayerthorpe';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Maymont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Maynooth';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Mayo';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'McAdam';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'McAuley';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'McBride';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'McCreary';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'McDonalds Corners';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'McGregor';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'McIver`s';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'McKellar';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'McLeese Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'McLennan';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'McLeod Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mcmasterville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Meacham';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Meadow Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Meaford';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Meander River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Meath Park';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Medicine Hat';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Meductic';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Melbourne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Melbourne';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Melfort';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Melita';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mellin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Melocheville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Melrose';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Melville';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Memramcook';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Meota';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mercier';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Merigomish';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Merlin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Merrickville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Merritt';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Metabetchouan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Metcalfe';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Meteghan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Metis-sur-Mer';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Miami';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Mica Creek';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Midale';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Middle Lake';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Middleton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Midland';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Midway';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Milden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mildmay';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Milestone';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Milford Bay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Milk River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Millbrook';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Millertown';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Millet';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Millhaven';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Milltown-Head of Bay D`Espoir';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Millville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Milo';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Milton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Milverton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Minaki';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Minburn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mindemoya';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Minden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mine Centre';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Ming`s Bight';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Miniota';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Minnedosa';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Minto';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Minto';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Minton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mirabel';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Miramichi';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Mirror';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Miscou Island';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Missanabie';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Mission';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mississauga';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mistassini';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Mistatim';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mitchell';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mohawks Of The Bay of Quinte F';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Moisie';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Molanosa';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Monastery';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Moncton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Monkstown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Monkton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont Bechervaise';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont St Grégoire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-Joli';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-Laurier';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-Louis';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-Rolland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-Royal';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-St-Hilaire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-St-Pierre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mont-Tremblant';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Montague';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Montebello';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Montmagny';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Montmartre';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Montney';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Montreal';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Montreal - Est';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Montréal - Nord';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Montréal - Ouest';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Moonbeam';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Moonstone';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mooretown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Moose Creek';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Moose Factory';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Moose Jaw';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Moose Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Moosomin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Moosonee';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Morden';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Morell';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Morin-Heights';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Morinville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Morley';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Morrin';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Morris';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Morrisburg';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Morse';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Morson';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Mortlach';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Mossbank';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mount Albert';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mount Brydges';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Mount Carmel-Mitchells Brook-S';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mount Forest';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mount Hope';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Mount Moriah';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Mount Pearl';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Mount Pleasant';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Mount Stewart';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Mount Uniacke';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Moyie';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Mulgrave';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Mulhurst';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Muncho Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Mundare';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Murdochville';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Murray River';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Musgrave Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Musgravetown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Muskoka';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Muskoka Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Muskrat Dam';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Muskrat Dam First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Musquodoboit Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Mutton Bay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Myrnam';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'M`Chigeeng';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Nackawic';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Nahanni Butte';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Naicam';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Nain';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nairn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Naiscoutaing First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nakina';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Nakusp';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Namao';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Nampa';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Nanaimo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Nantes';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nanticoke';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Nanton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Napanee';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Napierville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Naramata';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Natashquan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Navan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Nedelec';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Neepawa';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Neguac';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Neidpath';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Neilburg';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Nelson';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Nelson House';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nepean';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nephton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nestor Falls';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Neudorf';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Neustadt';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Neuville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Neville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'New Aiyansh';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'New Carlisle';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'New Dayton';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'New Denmark';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'New Denver';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'New Dundee';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'New Germany';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'New Glasgow';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'New Glasgow';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'New Hamburg';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'New Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'New Haven';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'New Liskeard';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'New London';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'New Norway';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'New Perlican';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'New Richmond';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'New Ross';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'New Sarepta';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'New Tecumseth';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'New Waterford';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'New Westminster';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'New-Wes-Valley';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Newbrook';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Newburgh';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Newcastle';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Newdale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Newmarket';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Newport';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Newtonville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Niagara Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Niagara-on-the-Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nickel Centre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Nicolet';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Nimpo Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Nipawin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nipigon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nipissing First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Nippers Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Nisku';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Niton Junction';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Niverville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nobel';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Nobleford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Nobleton';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Noel';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Noelville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Nokomis';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Norbertville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Nordegg';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Norman Wells';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Normandin';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Norman`s Cove-Long Cove';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Normetal';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Norquay';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Norris Arm';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'North Augusta';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'North Battleford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'North Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'North Gower';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'North Hatley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'North Portal';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'North Saanich';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'North Spirit Lake';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'North Sydney';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'North Vancouver';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'North West River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'North York';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Northbrook';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Northern Arm';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Norton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Norval';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Norway House';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Norwich';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Norwood';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre Dame de Bonsecours';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Notre Dame de Lourdes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre Dame de Lourdes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre Dame De L`Ile Perrot';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre Dame des Laurentides';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre Dame Des Prairies';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre Dame Du Portage';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-de-la-Paix';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-de-la-Salette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-de-Stanbridge';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-du-Bon-Conseil';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-du-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-du-Laus';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Notre-Dame-du-Nord';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Nouvelle';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Oak Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oak Ridges';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Oak River';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Oakville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oakville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oakwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oba';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ocean Falls';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ocean Park';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Ochre River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Odessa';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Odessa';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ogema';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ogoki';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ohsweken';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oil Springs';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ojibways of Hiawatha First Nat';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ojibways of Walpole Island Fir';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Oka';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Okanagan Falls';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Okotoks';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Old Crow';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Old Perlican';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Olds';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Oliver';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Omemee';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Omerville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Onaping Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oneida First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Onoway';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Opasatika';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ophir';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Orangeville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Orford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Orillia';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Orleans';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ormiston';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ormstown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oro';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Oromocto';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Orono';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Orrville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Osgoode';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oshawa';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Osler';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Osoyoos';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ottawa';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Otterburn Park';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Otterville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Outlook';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Outremont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Owen Sound';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Oxbow';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oxdrift';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Oxford';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Oxford House';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Oxford Mills';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Oyama';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Oyen';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'O`Leary';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Packs Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Pacquet';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Paddockwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Paisley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pakenham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Palgrave';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Palmarolle';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Palmer Rapids';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Palmerston';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pangman';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Papineauville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Paquette Corner';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Paquetville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Paradise';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Paradise Hill';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Paradise River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Paradise Valley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Parent';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Parham';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Paris';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Parkhill';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Parksville';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Parrsboro';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Parry Sound';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Parson';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Pasadena';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pass Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Patuanak';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Paynton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Peace River';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Peachland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Peawanuck';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Peerless Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Peers';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pefferlaw';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Peggy`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Peguis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pelee Island';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pelham';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pelican Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pelican Rapids';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pelly';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Pelly Crossing';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Pemberton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pembroke';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Penetanguishene';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Penhold';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pennant';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pense';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Penticton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Perce';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Perdue';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Peribonka';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Perkins';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Perrault Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Perth';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Perth-Andover';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Petawawa';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Peterborough';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Peterview';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Petit Rocher';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Petitcodiac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Petite-Riviere-St-Francois';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Petrolia';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Petty Harbour-Maddox Cove';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Philipsburg';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Piapot';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pickering';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pickle Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Picton';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Pictou';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Picture Butte';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pierceland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pierrefonds';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pierreville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pikangikum First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pikwitonei';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pilot Butte';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pilot Mound';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pinawa';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Pincher Creek';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pincourt';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pine Dock';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pine Falls';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pine River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pineal Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Pinehouse';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Piney';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pintendre';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Pitt Meadows';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Placentia';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Plaisance';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Plamondon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Plantagenet';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Plaster Rock';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Plate Cove East';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Plato';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Plattsville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pleasant Park';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Plenty';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Plessisville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Plevna';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Plum Coulee';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Plumas';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pohenegamook';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Point Grondine First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Point Leamington';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Point Pelee';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Pointe au Baril';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe Aux Trembles';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Pointe du Bois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-a-la-Croix';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-au-Pere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-aux-Outardes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-Calumet';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-Claire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-des-Cascades';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-des-Monts';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-Fortune';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pointe-Lebel';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ponoka';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pont-Rouge';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pont-Viau';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ponteix';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Pontiac';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Pool`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Poplar River';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Poplarfield';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Porcupine Plain';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Alberni';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Alice';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port au Choix';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port au Port West-Aguathuna-Fe';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port Aux Basques';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Bickerton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port Blandford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Burwell';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Carling';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Clements';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Colborne';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Coquitlam';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Credit';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Cunnington';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Dover';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Dufferin';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Edward';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Port Elgin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Elgin';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Franks';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Greville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Hardy';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Hawkesbury';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Hood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Hope';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port Hope Simpson';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port La Tour';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Lambton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Loring';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Maitland';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port McNeill';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port McNicoll';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Mellon';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Moody';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Morien';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Port Mouton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Perry';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Port Renfrew';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port Rexton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Robinson';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Rowan';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port Saunders';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Stanley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Port Sydney';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Port Union';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Port-Cartier';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Port-Daniel';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Port-Menier';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Portage la Prairie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Portage-du-Fort';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Portland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Portneuf';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Portugal Cove-St. Philip`s';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Poste-de-la-Baleine';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Postville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Pouce Coupe';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Pouch Cove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Powassan';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Powell River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Preeceville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Prelate';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Prescott';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Prespatou';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Preston';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Prevost';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Price';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Prince Albert';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Prince George';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Prince Rupert';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Princeton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Princeton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Princeton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Princeville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Prophet River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Provost';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Prud`homme';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Pubnico';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Puce';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Pugwash';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Punnichy';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Puvirnituq';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Quadra Island';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Qualicum Beach';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Quebec';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Queen Charlotte';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Queensport';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Queenston';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Queensville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Quesnel';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Quill Lake';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Quispamsis';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Quyon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Qu`Appelle';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rabbit Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Radisson';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Radisson';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Radium Hot Springs';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Radville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Radway';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Rae';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Rae Lakes';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rainbow Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rainy Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rainy River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Raith';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Raleigh';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ralston';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Ramea';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ramore';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Rankin Inlet';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Rapid City';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Rathwell';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rawdon';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Raymond';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Raymore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rayside-Balfour';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Red Bank';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Red Bay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Red Deer';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Red Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Red Rock';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Red Rock';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Red Sucker Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Redbridge';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Redcliff';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Redditt';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Redvers';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Redwater';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Reefs Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Regina';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Regina Beach';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Remigny';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Rencontre East';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Renfrew';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Rennie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Repentigny';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Réserve faunique de Rimouski';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Réserve faunique la Vérendrye';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Réserves fauniques de Matane e';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Resolute';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Reston';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Restoule';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Revelstoke';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rhein';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Riceton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Richibucto';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Richmond';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Richmond';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Richmond';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Richmond Hill';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Richmound';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Ridgedale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ridgetown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ridgeway';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rigaud';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Rigolet';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rimbey';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rimouski';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rimouski-Est';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Riondel';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ripley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ripon';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Riske Creek';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'River Hebert';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'River John';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'River of Ponds';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Riverhurst';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Riverport';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Rivers';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Riverton';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Riverview';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-a-Pierre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-au-Renard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-au-Tonnerre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-Beaudette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-Bleue';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-du-Loup';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-Heva';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Riviere-St-Jean';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Robb';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Robertsonville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Robert`s Arm';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Roberval';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Roblin';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rocanville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rochebaucourt';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rochester';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Rock Creek';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rock Forest';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rockglen';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rockland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rockwood';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Rocky Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rocky Mountain House';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rockyford';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Roddickton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rodney';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Rogersville';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Roland';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Rolla';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rollet';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rolling Hills';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rolphton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rondeau';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Rorketon';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rosalind';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Rose Blanche-Harbour Le Cou';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rose Valley';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rosebud';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rosemere';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Roseneath';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rosetown';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Ross River';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Rossburn';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Rosseau';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Rossland';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rosthern';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Rothesay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rougemont';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Rouleau';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Rouyn-Noranda';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Roxboro';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Roxton Falls';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Roxton Pond';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rumsey';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Rushoon';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Russell';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Russell';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Rusticoville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Ruthven';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Rycroft';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Ryley';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Saanich';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sabrevois';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sachigo First Nation Reserve 1';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Sackville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sacre Coeur';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Alexandre D`Iberville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Alphonse de Granby';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Amable';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Saint Andrews';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Antoine Des Laurentides';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Antoine Sur Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Antonin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Athanase';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Calixte';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Charles Borromee';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Charles Sur Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Christophe D`Arthabaska';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Saint Clair Beach';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Colomban';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Denis De Brompton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Denis Sur Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Esprit';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Etienne de Beauharnois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Etienne de Lauzon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Gerard Majella';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Isidore de la Prairie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Jean Baptiste';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Jean D`Orleans';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Joachim';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Saint John';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Joseph De La Pointe De L';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Laurent D`Orleans';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Lazare De Vaudreuil';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Lin Laurentides';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Marc Sur Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Mathias Sur Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Mathieu de Beloeil';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Mathieu de la Prairie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Maurice';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Norbert D`Arthabaska';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Paul D`Industrie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Philippe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Pierre D`Orleans';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Robert';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Roch De L`Achigan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Roch De Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Sulpice';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Thomas';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Urbain Premier';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Valere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint Victoire de Sorel';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Alexis-de-Montcalm';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Côme';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Donat';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Élie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Élie-d`Orford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Ferdinand';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Ferréol-les-neiges';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Hubert';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Hyacinthe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Saint-Michel-des-Saints';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Angele De Monnoir';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Ann De Sorel';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Brigide D`Iberville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Cecile De Milton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Dorotheé';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Famille';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Marie Salome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Marthe Du Cap';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Sophie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sainte Therese De Blainville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Salaberry-de-Valleyfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Salem';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Salisbury';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Salluit';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Salmo';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Salmon Arm';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Salmon Cove';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Salmon Valley';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Salt Springs';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Saltcoats';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Salvage';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sandspit';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sandwich';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Sandy Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sandy Cove Acres';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Sandy Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sandy Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sandy Lake First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Sanford';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sangudo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sanmaur';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sapawe';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sarnia';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Saskatchewan River Crossing';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Saskatoon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sauble Beach';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Saugeen First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Saulnierville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sault Ste. Marie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sault-au-Mouton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Savant Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Savona';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sawyerville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sayabec';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sayward';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Scarborough';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Sceptre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Schefferville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Schomberg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Schreiber';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Schuler';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Scotland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Scotstown';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Scott';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Seaforth';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Seal Cove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Searchmont';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Seba Beach';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sebright';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sebringville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sechelt';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sedgewick';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Sedley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Seeleys Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Selby';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Seldom-Little Seldom';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Selkirk';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Selkirk';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Semans';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Senneterre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Senneville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sept-Iles';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Serpent River First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Seven Persons';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Severn Bridge';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sexsmith';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Shakespeare';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Shalalth';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Shamattawa';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Shannonville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sharbot Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Shaunavon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Shawanaga First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shawbridge';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shawinigan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shawinigan-Sud';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shawville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Shebandowan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Shedden';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Shediac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shefford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Sheho';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Shelburne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Shelburne';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Shell Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Shellbrook';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Sherbrooke';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sherbrooke';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sherwood Park';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shigawake';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Shilo';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Shippagan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Shipshaw';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Shoal Lake';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Shubenacadie';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sibbald';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sicamous';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sidney';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Sidney';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Sifton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sillery';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Silver Valley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Silver Water';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Simcoe';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Simpson';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Sintaluta';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sioux Lookout';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sioux Narrows';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Six Nations of the Grand River';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Skookumchuck';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Slave Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Slocan';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Small Point-Broad Cove-Blackhe';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Smeaton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Smiley';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Smith';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Smithers';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Smiths Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Smithville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Smoky Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Smooth Rock Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Snelgrove';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Snow Lake';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Snowflake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sointula';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sombra';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Somerset';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sooke';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sorel-Tracy';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sorrento';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Souris';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Souris';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'South Brook';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'South Indian Lake';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'South Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'South Mountain';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'South River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'South River';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'South Slocan';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Southampton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Southampton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Southend';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Southern Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Southey';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Spalding';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Spaniard`s Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Spanish';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sparta';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Sparwood';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Speers';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Spencerville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Spences Bridge';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Sperling';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Spillimacheen';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Spirit River';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Spiritwood';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Split Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Spotted Island';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Sprague';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Springdale';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Springfield';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Springfield';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Springhill';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Springside';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Spruce Grove';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Spruce View';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sprucedale';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Spy Hill';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Squamish';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Squatec';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Adelphe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Adolphe-de-Dudswell';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Adolphe-d`Howard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Agapit';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Aime';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Albert';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Alexandre-de-Kamouraska';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Alexis-de-Matapedia';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Alexis-des-Monts';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Alphonse-Rodriguez';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Andre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Andre-Avellin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Andre-du-Lac-St-Jean';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Andre-Est';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Anselme';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St-Antoine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Antoine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Antoine-de-Tilly';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Apollinaire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Augustin-de-Desmaures';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Barnabe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Barthelemy';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St-Basile';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Basile-le-Grand';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Basile-Sud';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Blaise-sur-Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Boniface-de-Shawinigan';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Bruno';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Bruno-de-Montarville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Calixte-de-Kilkenny';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Casimir';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Celestin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Cesaire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Charles-de-Bellechasse';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Chrysostome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Clet';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Constant';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Cyrille-de-Wendover';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Damase';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Damien-de-Buckland';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Denis';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Edouard-de-Lotbiniere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Eleuthere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Emile';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Emile-de-Suffolk';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Ephrem-de-Beauce';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Ephrem-de-Tring';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St-Eugene';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Eugene-de-Guigues';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Eustache';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Fabien-de-Panet';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Felicien';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Felix-de-Kingsey';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Felix-de-Valois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Fidele-de-Mont-Murray';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Flavien';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Francois-du-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Fulgence';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Gabriel';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Gabriel-de-Brandon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Gedeon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Georges';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Georges-de-Beauce';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Georges-de-Cacouna';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Gerard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Germain-de-Grantham';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Gregoire-de-Greenlay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Guillaume';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Hilarion';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Hippolyte';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Honore-de-Beauce';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Honore-de-Chicoutimi';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Hugues';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Irenee';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St-Isidore';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jacques';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jean-Chrysostome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jean-de-Dieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jean-de-Matha';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jean-Port-Joli';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jean-sur-Richelieu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jerome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Joseph-de-Beauce';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Joseph-de-la-Rive';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Joseph-de-Sorel';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jovite';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Jude';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Just-de-Bretenieres';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Lambert';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Lambert-de-Lauzon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Laurent';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Leon-le-Grand';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Leonard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Leonard-d`Aston';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Liboire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Lin';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St-Louis de Kent';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Louis-de-France';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Luc';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Ludger';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Magloire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Malachie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Malo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Marc-des-Carrieres';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Methode-de-Frontenac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Michel-de-Bellechasse';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Moose';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Nazaire-d`Acton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Nicolas';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Noel';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Odilon-de-Cranbourne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Ours';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pacome';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pamphile';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pascal';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Patrice-de-Beaurivage';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Paul-de-Montminy';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Paul-d`Abbotsford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Paulin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Philippe-de-Neri';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pie-de-Guire';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pierre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pierre-de-Wakefield';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'St-Pierre-Jolys';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Pierre-les-Becquets';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Polycarpe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Prime';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Prosper-de-Dorchester';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St-Quentin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Raymond';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Redempteur';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Remi';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Rene-de-Matane';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Roch-de-Mekinac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Roch-des-Aulnaies';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Romuald';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Sauveur';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Sauveur-des-Monts';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Simeon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Simon-de-Bagot';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Simon-de-Rimouski';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Sylvere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Sylvestre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Theophile';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Thomas-d`Aquin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Timothee';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Tite';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Tite-des-Caps';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Ubalde';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Ulric';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Urbain';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Victor';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Wenceslas';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Zacharie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Zenon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Zephirin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St-Zotique';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Alban`s';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'St. Albert';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Ambroise de Chicoutimi';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Anthony';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Basile de Portneuf';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'St. Benedict';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Bernard de Dorchester';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Bernard`s-Jacques Fontaine';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Brendan`s';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Bride`s';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'St. Brieux';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Catharines';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Charles';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'St. Claude';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Clements';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Come de Kennebec';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Davids';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Edouard de Frampton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Fabien de Rimouski';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Ferdinand d`Halifax';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Fidele';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'St. Francois Xavier';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Gabriel de Rimouski';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Gedeon de Beauce';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St. George';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. George';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. George`s';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Gregoire de Nicolet';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'St. Gregor';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Henri de Levis';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Honore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Isidore de Prescott';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Jacobs';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Jacques-Coomb`s Cove';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'St. Jean Baptiste';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. John`s';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'St. Laurent';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Lawrence';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'St. Lazare';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Leon De Chic.';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St. Leonard';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Lewis';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'St. Louis';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Lunaire-Griquet';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'St. Margaret Village';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Martin de Beauce';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St. Martins';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Marys';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Mary`s';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'St. Michael';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Moise';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'St. Paul';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'St. Peters';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'St. Peter`s';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Raphael de Bellechasse';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Regis';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Sebastien';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Stanislas de Champlain';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'St. Stephen';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Theodore de Chertsey';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'St. Thomas';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Victor de Beauce';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'St. Vincent de Paul';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'St. Vincent`s-St. Stephen`s-Pe';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'St. Walburg';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Stand Off';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Standard';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Stanley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Stanley Mission';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Stanstead';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Star City';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Starbuck';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Stavely';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stayner';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Adele';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Agathe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Agathe-des-Monts';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Agathe-Sud';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-de-Beaupre';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-de-Bellevue';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-de-la-Perade';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Ste-Anne-de-Madawaska';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-de-Portneuf';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-des-Monts';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-des-Plaines';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Anne-du-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Blandine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Brigitte-de-Laval';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Catherine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Clotilde-de-Horton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Eulalie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Felicite';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Foy';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Genevieve';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Helene-de-Bagot';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Henedine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Jeanne-d`Arc';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Julie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Julie-de-Vercheres';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Julienne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Justine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Lucie-de-Beauregard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Madeleine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Marguerite';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Marie-de-Beauce';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Marie-de-Blandford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Marthe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Marthe-sur-le-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Perpetue';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Petronille';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Rosalie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Rose';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Rose-de-Watford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Rose-du-Nord';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Sophie-de-Levrard';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Thecle';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Therese';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Veronique';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste-Victoire';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Ste. Agathe';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Agathe de Lotbiniere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Angele de Laval';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Cecile Masham';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Claire de Dorchester';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Croix de Lotbiniere';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Gertrude';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Justine de Newton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Martine';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Methode de Frontenac';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ste. Monique de Nicolet';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Ste. Rose du Lac';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Steady Brook';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Steep Rock';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Steinbach';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Stellarton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Stephenville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Stephenville Crossing';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Stettler';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stevensville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Stewart';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stewarttown';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Stewiacke';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Stirling';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stirling';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Stockholm';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Stoke';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stoke`s Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Stoneham';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Stonewall';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stoney Creek';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stoney Point';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Stony Plain';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Stony Rapids';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Storthoaks';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stouffville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Stoughton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Straffordville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Strasbourg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stratford';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Stratford';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Stratford';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Strathclair';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Strathmore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Strathroy';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stratton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Streetsville';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Strome';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Strongfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Stroud';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Stukely-Sud';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sturgeon Falls';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Sturgis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sudbury';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sultan';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Summer Beaver';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Summerford';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Summerland';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Summerside';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Summerside';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Summerville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Summit Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sunderland';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sundre';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sundridge';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Sunnyside';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Surrey';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Sussex';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sutton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Sutton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Swan Hills';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Swan Lake';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Swan River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Swastika';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Swift Current';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Swift River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Sydenham';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Sydney';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Sylvan Lake';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Taber';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Tabusintac';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Tachie';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Tadoule Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Tadoussac';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Tagish';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Tahsis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tamworth';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Tangier';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Tantallon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tara';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Taschereau';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Tasiujaq';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Tatamagouche';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Tatla Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tavistock';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Taylor';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Taylor Corners';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tecumseh';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Teeswater';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Telegraph Creek';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Telkwa';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Temagami';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Temiscaming';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Terra Nova';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Terrace';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Terrace Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Terrasse Vaudreuil';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Terrebonne';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Terrenceville';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Teslin';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Tete-a-la-Baleine';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Teulon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thamesford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thamesville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'The Eabametoong (Fort Hope) Fi';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'The Pas';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thedford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Theodore';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thessalon';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thessalon First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Thetford Mines';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Thicket Portage';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Thompson';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Thorburn';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Thorhild';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thornbury';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thorndale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thorne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thornhill';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thorold';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Thorsby';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Three Hills';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Thrums';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thunder Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Thurlow';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Thurso';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Tignish';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tilbury';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Tilley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tillsonburg';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Timmins';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Tingwick';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Tisdale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tiverton';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Toad River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tobermory';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Tobique First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Tofield';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Tofino';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Togo';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Toledo';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Tomahawk';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Tompkins';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Topley';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Torbay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Toronto';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Toronto Island';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Torquay';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Torrington';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tottenham';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Tracadie-Sheila';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Trail';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Tramping Lake';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Treherne';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Tremblay';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Trenton';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Trenton';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Trepassey';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Tribune';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Tring-Jonction';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Triton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Trochu';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Trois-Pistoles';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Trois-Rivieres';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Trout Creek';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Trout Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Trout Lake';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Trout Lake';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Trout River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Trowbridge';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Truro';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Tsay Keh Dene';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Tsiigehtchic';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Tuktoyaktuk';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Tumbler Ridge';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Turner Valley';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Turnor Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Turtleford';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Tusket';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Tweed';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Twillingate';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Two Hills';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Tyne Valley';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Ucluelet';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Udora';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Umiujaq';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Uniondale';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Unionville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Unity';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Upper Island Cove';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Upper Musquodoboit';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Upper Stewiacke';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Upsala';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Upton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Uranium City';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Utterson';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Uxbridge';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Val Marie';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-Alain';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-Barrette';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-Belair';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-Brillant';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-David';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-des-Bois';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Val-d`Or';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Valcartier';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Valcourt';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Valemount';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vallee-Jonction';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Valley East';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Valleyview';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Vallican';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Van Anda';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Vancouver';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Vanderhoof';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Vanguard';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Vanier';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vanier';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Vankleek Hill';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Vanscoy';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Varennes';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vaudreuil';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vaudreuil Dorion';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vaudreuil-sur-le-Lac';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Vaughan';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Vauxhall';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Vavenby';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Vegreville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Venise-en-Quebec';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vercheres';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Verdun';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Vermilion';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Vermilion Bay';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Verner';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Vernon';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Vernon River';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Verona';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Veteran';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Vibank';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Victoria';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Victoria';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Victoria';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Victoriaville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'View Royal';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Viking';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Ville-Marie';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Vilna';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Vimont';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Vineland';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Virden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Virginiatown';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Viscount';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Vita';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Vonda';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Vulcan';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Waasagomach';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wabamun';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Wabana';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wabigoon';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Wabowden';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Wabush';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wadena';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wainfleet';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wainwright';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wakaw';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Wakefield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Walden';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Waldheim';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Walkerton';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Wallace';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wallaceburg';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Walsh';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Walton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wandering River';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wanham';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Wanless';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wapekeka First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wapella';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Warburg';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Warden';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wardsville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Warkworth';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Warman';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Warner';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Warren';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Warspite';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Warwick';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wasaga Beach';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Wasagaming';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Waskaganish';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Waskatenau';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Waskesiu Lake';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Waswanipi';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Waterdown';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Waterford';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Waterhen';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Waterloo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Waterloo';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Waterville';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Watford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Watrous';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Watson';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Watson Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Waubaushene';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Waverley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wawa';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Wawanesa';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wawota';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Webb';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Webbwood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Webequie';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Wedgeport';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Weedon';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Weedon Centre';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Welcome';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Welland';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wellandport';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wellesley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wellington';
		$city->save();

		$city = new City();
		$city->province = 'Prince Edward Island';
		$city->city = 'Wellington';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Wells';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Welsford';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Welwyn';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wembley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Wemindji';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Wendover';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Wesleyville';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'West Brome';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'West Guilford';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'West Lincoln';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'West Lorne';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'West Vancouver';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Westbank';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Westbury';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Western Bay';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Westfield';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Westlock';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Westmeath';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Westmount';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Westport';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Westport';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Westree';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Westville';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Westwold';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wetaskiwin';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Weyburn';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Weymouth';
		$city->save();

		$city = new City();
		$city->province = 'Nunavut';
		$city->city = 'Whale Cove';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wheatley';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Whistler';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Whitbourne';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Whitby';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Whitchurch-Stouffville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'White Fox';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'White River';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'White Rock';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Whitecourt';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Whitefish';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Whitefish Falls';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Whitefish River First Nation';
		$city->save();

		$city = new City();
		$city->province = 'Yukon';
		$city->city = 'Whitehorse';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Whitelaw';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Whitemouth';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Whitewood';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Whitney';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Whycocomagh';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wiarton';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Wickham';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Widewater';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wikwemikong';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wilberforce';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wilcox';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wildwood';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wilkie';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Williams Lake';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Williamsburg';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Willingdon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Willow Bunch';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Willowbrook';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Winchester';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Windermere';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Windsor';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Windsor';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Windsor';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Windthorst';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Winfield';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Winfield';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wingham';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Winkler';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Winnipeg';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Winnipeg Beach';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Winnipegosis';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Winona';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Winter Harbour';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Winterton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wiseton';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wishart';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Witless Bay';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Woburn';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Woking';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Wolfville';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wollaston Lake';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wolseley';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Wonowon';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wood Mountain';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Woodbridge';
		$city->save();

		$city = new City();
		$city->province = 'Manitoba';
		$city->city = 'Woodridge';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Woodstock';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Woodstock';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Woodville';
		$city->save();

		$city = new City();
		$city->province = 'Newfoundland';
		$city->city = 'Woody Point';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wooler';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Worsley';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Wotton';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Wrentham';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Wrigley';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wunnummin Lake';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Wynndel';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Wynyard';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Wyoming';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Yahk';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Yale';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Yamachiche';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Yamaska';
		$city->save();

		$city = new City();
		$city->province = 'Quebec';
		$city->city = 'Yamaska-Est';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Yarker';
		$city->save();

		$city = new City();
		$city->province = 'Nova Scotia';
		$city->city = 'Yarmouth';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Yellow Creek';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Yellow Grass';
		$city->save();

		$city = new City();
		$city->province = 'Northwest Territories';
		$city->city = 'Yellowknife';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'York';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Yorkton';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Youbou';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Young';
		$city->save();

		$city = new City();
		$city->province = 'Alberta';
		$city->city = 'Youngstown';
		$city->save();

		$city = new City();
		$city->province = 'New Brunswick';
		$city->city = 'Young`s Cove Road';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Zealandia';
		$city->save();

		$city = new City();
		$city->province = 'British Columbia';
		$city->city = 'Zeballos';
		$city->save();

		$city = new City();
		$city->province = 'Saskatchewan';
		$city->city = 'Zenon Park';
		$city->save();

		$city = new City();
		$city->province = 'Ontario';
		$city->city = 'Zurich';
		$city->save();
	}
}
