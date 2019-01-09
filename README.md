# BlockchainBot

Order = {
		rate 		: 0.0123,
		quantity 	: 300
	}
	
OrderBook = [
				{
					rate 		: 0.0123,
					quantity 	: 300
				},
				{
					rate 		: 0.0123,
					quantity 	: 300
				}
			]
			
SmallestSpread = {
			spreadPercent 	: 0.001,
			market			: "BTC-XRP",
			symbol			: "XRP",
			cost_USD		: 0.45,
			cost_BTC		: 0.00007319
		}	


marketHistory = {
			"Id" : 319435,
			"TimeStamp" : "2014-07-09T03:21:20.08",
			"Quantity" : 0.30802438,
			"Price" : 0.01263400,
			"Total" : 0.00389158,
			"FillType" : "FILL",
			"OrderType" : "BUY"
		}


# -------------------------------
#	getTicker()
#	getTrend()
#	isUpTrend()
#	isDownTrend()
#	getVolume()
#	isHighVolume()
#	getAverageBuyOrder()
#	getAverageSellOrder()
#	getBuyOrderWall()
#	getSellOrderWall()

# 	getsimpleMovingAverage()
#	getExponentialMovingAverage()

#	-------------------------------

#	SMA = simple moving average
#	SMA = mean of values over time period
# 	For example, to calculate a basic 10-day moving average 
#	you would add up the closing prices from the past 10 days
# 	and then divide the result by 10.

#	EMA = (P * a) + (previous EMA * (1-a))
#	P = current price
#	a = smoothing factor = 2 / (1 + N)
# 	N = number of time periods
#	use SMA when previous EMA is unknown

#	-------------------------------

public void main(String[] args){
	$order = new Order();
	$order->getQuantity();
	
	// get Ticker - list of coins
	
		// get coin market cap ticker
		
		$coinMarketCap = new CoinMarketCap(market, limit);
		
		// get smallest spread
	
	// get buy order book
	
	// get sell order book
	
	// get trend
	
	// buy on early uptrend
		
		//log transaction
			
	// sell at 10% of the trend
	
		//log transaction
		
	// rinse and repeat
	
	
}


# --------------------------------

 $botRisky = new Bot( array(
	'limit' => '100',
	'spreadMin' => '0.02,
	'spreadMax' => '0.02,
	//'excludeCoin' =>['USDT', 'TUSDT'],
	'aggression' => 10,
	'something' => ''
 ));
 
 $botRisky.run();

#	--------------------------------
#	Strategy() interface
#		run()
#	MarketMaker extends JsonBase implements Strategy 
#  		get list of coins
#		filter possible trading coins list
#		get next coin to trade (smallest spread)
#		
#			get the order book
#			determine isUpTrend
#			determine candle
#			place buy order
#
#
#		get next coin to trade (smallest spread) from filter possible trading coins list
#		
#			get the order book
#			determine isUpTrend
#			determine candle
#			place buy order


		
				