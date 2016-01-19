<?php

return [

	# Config this the way you want the script to behave
	# For help look at the readme
	# https://github.com/doefler/Instagram-growth
	'username' => env('INSTAGRAM_USERNAME'),
	'access_token' => env('INSTAGRAM_ACCESS_TOKEN'),
	'debugging' => env('INSTAGRAM_DEBUGGING', true),
	'like' => [
		'do' => true,
		'min_likes' => 20,
		'max_likes' => 9999
	],
	'follow' => [
		'do' => false,
		'min_likes' => 0,
		'max_likes' => 0,
		'like_recent' => [
			'do' => true,
			'count' => 3
		]
	],
	'comment' => [
		'do' => false,
		'min_likes' => 0,
		'max_likes' => 0
	],

	# Insert the tags you want to explore with the script
	# Exclude the hashtag itself "#" when you write your tags
	# Be aware that the more tags you add, the longer time the script will take to perform.
	'tags' => [
		'website',
		'designer',
		'flyersdesign',
		// 'photography',
		'webdesign',
		'design',
		'artwork',
		'web',
		'website',
		'abstract',
		'abstract_buff',
		'abstractart',
		'abstracters_anonymous',
		'abstraction',
		'abstracto',
		'accessories',
		'accessory',
		'action',
		'active',
		'actor',
		'actress',
		'adorable',
		'afterlight',
		'all_shots',
		'graphic',
		'websites',
		'freelance',
		'passion',
		'graphicdesign',
		'designteam',
		'business',
		'marketing',
		'focus',
		'entrepreneur',
		'likeaboss',
		'success',
		'blog',
		'online',
		'branding',
		'socialmedia',
		'computerscience',
		'webgeeks',
		'webgeek_ke',
		'webdevelopment',
		'videography',
		'color',
		'colour',
		'videoediting',
		'video',
		'amazayn',
		'amazing',
		'amahone',
		'amazingink',
		'amc',
		'amen',
		'android',
		'androidcommunity',
		'androidinstagram',
		'androidnesia',
		'androidographer',
		'androidography',
		'androidonly',
		'animal',
		'animales',
		'animals',
		'anonymous',
		'apple',
		'appleiphone',
		'aquaria',
		// 'aquarium',
		// 'archidaily',
		'archilovers',
		'architecture',
		'architecturelovers',
		'architectureporn',
		// 'architexture',
		// 'ariana',
		'latenight',
		'hardwork',
		'hiphop',
		'rap',
		'mixing',
		'holidays',
		'protools',
		'newmusic',
		'working',
		'feelinggood',
		'work',
		'afterwork',
		'music',
		'holiday',
		'happy',
		'arianator',
		'armcandy',
		'armparty',
		'armswag',
		'art',
		'artist',
		'arts',
		'artsy',
		'artwork',
		'ash',
		'ashton',
		'ashtonirwin',
		'ask',
		'askaway',
		'askfm',
		'askfmit',
		'askfmme',
		'askforask',
		'askme',
		'askmeanything',
		// 'askmemaybe
		// 'askmesomething
		// 'askmestuff
		// 'asknow
		// 'austin
		// 'austinm
		// 'austinmahone
		// 'author
		// 'autumn
		// 'autumnweather
		// 'awake
		// 'awesome
		// 'awesome_hdr
		// 'babies
		// 'baby
		// 'babyhorse
		// 'back
		// 'backboard
		// 'backintheday
		// 'backtuck
		// 'ball
		// 'baller
		// 'ballet
		// 'balling
		// 'baltimore
		// 'baltimoreravens
		// 'bangabanga
		// 'bank
		// 'bar
		// 'bars
		// 'base
		// 'baseball
		// 'baseballbat
		// 'bases
		// 'basket
		// 'basketball
		// 'bat
		// 'bday
		// 'beach
		// 'beam
		// 'beat
		// 'beats
		// 'beautiful
		// 'beautifulday
		// 'beauty
		// 'bed
		// 'bedtime
		// 'beer
		// 'beers
		// 'beiber
		// 'beiberfever
		// 'belieber
		// 'believe
		// 'believetour
		// 'bellybar
		// 'bellybuttonring
		// 'bellyrings
		'benjamin',
		'benjamins',
		'best',
		'bestfriend',
		'bestfriends',
		'besties',
		'bestoftheday',
		'bestofvsco',
		'bestsong',
		'bike',
		'bikelife',
		'biker',
		'bikergang',
		'bills',
		'birthday',
		'birthdaycake',
		'biz',
		'black',
		'blackandpurple',
		'blackandwhite',
		'blessed',
		'bling',
		'blizzard',
		'blonde',
		// 'bloom
		// 'blooms
		// 'blossom
		// 'blue
		// 'blueskies
		// 'bluesky
		// 'bnw
		// 'bnw_society
		// 'board
		// 'bodyart
		// 'bodybuilding
		// 'bodymods
		// 'boo
		// 'boobear
		// 'book
		// 'books
		// 'bookworm
		// 'bored
		// 'boredkikme
		// 'born
		// 'botanical
		// 'box
		// 'bracelets
		// 'braceletsoftheday
		// 'braceletstacks
		// 'braid
		// 'braidideas
		// 'branco
		// 'bread
		// 'breakfast
		// 'breakout
		// 'breezy
		// 'bride
		// 'bridesmaids
		// 'bright
		// 'brilliam
		// 'bro
		'bronco',
		'broncos',
		'broncosnation',
		// 'brown
		// 'brunette
		// 'bug
		// 'bugs
		// 'bugslife
		// 'building
		// 'buildings
		// 'bumpin
		// 'business
		// 'bwwednesday
		// 'bye2014
		// 'c4c
		// 'cafe
		// 'cafelife
		// 'caffeine
		// 'cake
		// 'cal
		// 'californiagirls
		// 'caligirls
		// 'calm
		// 'calum
		// 'calumhood
		// 'can
		// 'candle
		// 'candles
		// 'candy
		// 'cantbetamed
		// 'capital
		// 'capture
		// 'car
		// 'cardio
		// 'carols
		// 'cars
		// 'carving
		// 'cash
		// 'cashmoney
		// 'cat
		// 'catch
		// 'caterina
		// 'celebrate
		// 'celebration
		// 'ceremony
		// 'chat
		// 'cheer
		// 'cheerathletics
		// 'cheerclassic
		// 'cheering
		// 'cheerislife
		// 'cheerleader
		// 'cheerleading
		// 'cheerpassion
		// 'cheerperfection
		// 'cheersport
		// 'cheerstagram
		// 'chesttattoo
		// 'child
		// 'children
		// 'childrenphoto
		// 'chill
		// 'chilling
		// 'chilly
		// 'chocolate
		// 'choreography
		// 'chris
		// 'chrisbrown
		// 'christmas
		// 'christmas2014
		// 'christmastree
		// 'cinema
		// 'cities
		// 'city
		// 'class
		// 'classess
		// 'classmate
		// 'classmates
		// 'cleaneating
		// 'clearskies
		// 'clearsky
		// 'clearskys
		// 'climax
		// 'closeup
		// 'clothes
		// 'cloud
		// 'cloud_skye
		// 'cloudporn
		// 'clouds
		// 'cloudy
		// 'cocktail
		// 'cocktails
		// 'coexist
		// 'coffee
		// 'coffeeaddict
		// 'coffeegram
		// 'coffeeholic
		'coffeelove',
		'coffeelover',
		'coffeelovers',
		// 'coffeemug
		// 'coffeeoftheday
		// 'coffiecup
		// 'cold
		// 'color
		// 'colores
		// 'colorful
		// 'colorgram
		// 'colors
		// 'colour
		// 'comment
		// 'comment4comment
		// 'commentall
		// 'commentalways
		// 'commentback
		// 'commentbackteam
		// 'commentbelow
		// 'commenter
		// 'commenting
		// 'comments
		// 'comments4comments
		// 'commentteam
		// 'company
		// 'compassion
		// 'composition
		// 'computer
		// 'computers
		// 'concealer
		// 'congrats
		// 'contests
		// 'cool
		// 'coral
		// 'cosmetic
		// 'cosmetics
		// 'costume
		// 'cotd
		// 'country
		// 'couple
		// 'court
		// 'coverup
		// 'crazy
		// 'crazyclouds
		// 'crease
		// 'creative
		// 'creature
		// 'creatures
		// 'creepy
		// 'crisp
		// 'crowd
		// 'cruisin
		// 'cruising
		// 'crystals
		// 'cuddle
		// 'cuddly
		// 'curly
		// 'currentlywearing
		// 'cute
		// 'cutie
		// 'cycle
		// 'cyrus
		// 'dad
		// 'dailygrind
		// 'dance
		// 'dancefloor
		// 'dancer
		// 'dancerecital
		// 'dancers
		// 'danceshoes
		// 'dancing
		// 'dark
		// 'day
		// 'dayjob
		// 'daytime
		// 'ddlovato
		// 'dec31
		// 'dec312013
		// 'decorations
		// 'dedication
		// 'delicious
		// 'delish
		// 'demetria
		// 'demi
		// 'demilovato
		// 'denver
		// 'denverbroncos
		// 'design
		// 'dessert
		// 'dessertporn
		// 'desserts
		// 'destiny
		// 'destinyhopecyrus
		// 'determination
		// 'device
		// 'devonne
		// 'diamonds
		// 'diet
		// 'dinner
		// 'direct
		// 'directioner
		// 'directioners
		// 'directmessage
		// 'dough
		// 'downpour
		// 'drake
		// 'drakequotes
		// 'draw
		// 'drawing
		// 'dress
		// 'drink
		// 'drinks
		// 'drinkup
		// 'drive
		// 'driver
		// 'drizzy
		// 'drizzydrake
		// 'droid
		// 'dubstep
		// 'dude
		// 'dusk
		// 'dvd
		// 'ear
		// 'earlobe
		// 'early
		// 'earlybird
		// 'earring
		// 'earringaddict
		// 'earringfashion
		// 'earrings
		// 'earringsoftheday
		// 'earringstagram
		// 'earringswag
		// 'earth
		// 'eat
		// 'eatclean
		// 'eating
		// 'electronic
		// 'electronics
		// 'elves
		// 'engine
		// 'epic
		// 'epicsky
		// 'essie
		// 'exotic
		// 'exoticcar
		// 'exoticcars
		// 'exposure
		// 'extraterrestrial
		// 'eyebrows
		// 'eyeliner
		// 'eyes
		// 'eyeshadow
		// 'f4f
		// 'face
		// 'faith
		// 'faithful
		// 'fall
		// 'falltime
		// 'fallweather
		// 'fam
		// 'family
		// 'familytime
		// 'famous
		// 'fans
		// 'farm
		'fashion',
		'fashiongram',
		'fashionhijabis',
		'fashionista',
		'fashionlovers',
		'fashionmodesty',
		'fashionpost',
		'fashionshoes',
		// 'father
		// 'favoritesong
		// 'feast
		// 'fenty
		// 'field
		// 'fifa
		// 'fight
		// 'film
		// 'films
		// 'filter
		// 'filters
		// 'firstbase
		// 'fish
		// 'fishporn
		// 'fishtank
		// 'fit
		// 'fitness
		// 'fitnessaddict
		// 'fitnessgear
		'fitnessmodel',
		// 'fitspo
		// 'fives
		// 'flawless
		// 'flex
		// 'flexibility
		// 'flexible
		// 'flick
		// 'flicks
		// 'flip
		// 'focus
		// 'foliage
		// 'follow
		// 'follow4follow
		// 'followall
		// 'followalways
		// 'followback
		// 'followbackteam
		// 'follower
		// 'followforfollow
		// 'followher
		// 'followhim
		// 'followme
		// 'follows
		// 'followshoutoutlikecomment
		// 'food
		// 'foodgasm
		// 'foodpic
		// 'foodpics
		// 'foodporn
		// 'foods
		// 'football
		// 'footballgame
		// 'footballgames
		// 'footballplayer
		// 'footballseason
		// 'forever
		// 'forgiveness
		// 'foundation
		// 'franklin
		// 'franklins
		// 'freeway
		// 'fresh
		// 'freshwater
		// 'friend
		// 'friends
		// 'friendship
		// 'frost
		// 'frosty
		// 'fslc
		// 'fslcback
		// 'fun
		// 'funny
		// 'funnypictures
		// 'funtime
		// 'funtimes
		// 'furry
		// 'furtherfasterstronger
		// 'futball
		// 'futbol
		// 'gadget
		// 'gadgets
		// 'gallery
		// 'gallop
		// 'game
		// 'gamer
		// 'gamergirl
		// 'gamerguy
		// 'games
		// 'gamestagram
		// 'gametime
		// 'gamin
		// 'gaming
		// 'geek
		// 'gem
		// 'gems
		// 'gemstone
		// 'genre
		// 'geometric
		// 'geometry
		// 'getfit
		// 'gettingready
		// 'gf
		// 'ghost
		// 'gift
		// 'gifts
		// 'girl
		// 'girlfriend
		// 'girls
		// 'girly
		// 'git
		// 'glue
		// 'goal
		// 'goals
		// 'gobroncos
		// 'god
		// 'godenver
		// 'gohawks
		// 'goingout
		// 'gomez
		// 'goodday
		// 'goodfriends
		// 'goodmorning
		// 'goodmovie
		// 'goodmusic
		// 'goodnight
		// 'goodtime
		// 'goodtimes
		// 'goodweather
		// 'google
		// 'googleandroid
		// 'gorgeous
		// 'goseahawks
		// 'goseattle
		// 'grace
		// 'graffiti
		// 'graffitiigers
		// 'graffitiporn
		// 'grande
		// 'graphic
		// 'graphics
		// 'grass
		// 'green
		// 'greens
		// 'grind
		// 'grindout
		// 'groom
		// 'grow
		// 'guy
		// 'guys
		// 'gym
		// 'gymlife
		// 'gymnast
		// 'gymnastic
		// 'gymnastics
		// 'gymnastique
		// 'gymnastlife
		// 'gymnasts
		// 'hack
		// 'haha
		// 'hair
		// 'haircolor
		// 'haircolour
		// 'haircut
		// 'hairdo
		// 'hairdye
		// 'hairfashion
		// 'hairideas
		// 'hairofinstagram
		// 'hairoftheday
		// 'hairstyle
		// 'hairstyles
		// 'halloween
		// 'handsome
		// 'handtattoo
		// 'hannah
		// 'hannahmontana
		// 'happiness
		// 'happy
		// 'happybirthday
		// 'happyholidays
		// 'happyholidays2014
		// 'happynewyear
		// 'happyrunner
		// 'happythanksgiving
		// 'harbaughbowl
		// 'harbowl
		// 'harold
		// 'haroldstyles
		// 'harreh
		// 'harry
		// 'harryedwardstyles
		// 'harrystyles
		// 'harrystylesimagine
		// 'hauntedhouse
		// 'hawks
		// 'hazza
		// 'hazzastyles
		// 'headlines
		// 'health
		// 'healthy
		// 'healthychoices
		// 'heels
		// 'heelsaddict
		// 'hello2015
		// 'helmet
		// 'highbar
		// 'highheels
		// 'highheelshoes
		// 'highway
		// 'hilarious
		// 'hiphop
		// 'hipster
		// 'hockey
		// 'hockeygram
		// 'hockeylife
		// 'hockeyplayer
		// 'hockeyplayers
		// 'hockeystick
		// 'holiday
		// 'holidays
		// 'holidayseason
		// 'hollywood
		// 'homerun
		// 'homework
		// 'hoop
		// 'hope
		// 'horan
		// 'horizon
		// 'horse
		// 'horses
		// 'horses_of_instagram
		// 'horseshoe
		// 'horseshow
		// 'horsesofinstagram
		// 'horsestagram
		// 'hot
		// 'hotd
		// 'hound
		// 'hugs
		// 'hundreds
		// 'hungry
		// 'ice
		// 'icecream
		// 'icerink
		// 'ics
		// 'igaddict
		// 'igbabies
		// 'igdaily
		// 'igers
		// 'igersbnw
		// 'igmasters
		// 'igsneakercommunity
		// 'imagine
		// 'indigo
		// 'infant
		// 'ink
		// 'inked
		// 'inning
		// 'insect
		// 'insects
		// 'insta
		// 'insta_bw
		// 'instaandroid
		// 'instaariana
		// 'instaart
		// 'instaartist
		// 'instaautumn
		// 'instababy
		// 'instaball
		// 'instaballer
		// 'instaballet
		// 'instabday
		// 'instabike
		// 'instabirthday
		// 'instablackandwhite
		// 'instablooms
		// 'instacake
		// 'instacheer
		// 'instacheerleader
		// 'instacloud
		// 'instaclouds
		// 'instacoffee
		// 'instacolor
		// 'instacolorful
		// 'instacool
		// 'instacyrus
		// 'instadaily
		// 'instadance
		// 'instadirect
		// 'instadrake
		// 'instadroid
		// 'instafall
		// 'instafamous
		// 'instafashion
		// 'instafish
		// 'instafit
		// 'instafitness
		// 'instaflick
		// 'instafollow
		// 'instafood
		// 'instafun
		// 'instafutbol
		// 'instagame
		// 'instagamer
		// 'instagaming
		// 'instago
		// 'instagood
		// 'instagoodnight
		// 'instagraff
		// 'instagraffiti
		// 'instagrafite
		// 'instagramcats
		// 'instagramdirect
		// 'instagramdogs
		// 'instagramers
		// 'instagramhub
		// 'instagrammers
		// 'instagrande
		// 'instahair
		// 'instahappy
		// 'instahealth
		// 'instaheels
		// 'instahorses
		// 'instahub
		// 'instaiphone
		// 'instajewelry
		// 'instajob
		// 'instakicks
		// 'instakids
		// 'instalife
		// 'instalike
		// 'instamakeup
		// 'instamemory
		// 'instamiley
		// 'instaminim
		// 'instamoment
		// 'instamood
		// 'instamorning
		// 'instamoto
		// 'instamotogallery
		// 'instamotor
		// 'instamotorcycle
		// 'instamovies
		// 'instanature
		// 'instandroid
		// 'instaparty
		// 'instapassport
		// 'instaperry
		// 'instapuppy
		// 'instarich
		// 'instarun
		// 'instarunner
		// 'instaselfie
		// 'instashoes
		// 'instaskater
		// 'instasky
		// 'instasnapchat
		// 'instasnow
		// 'instaspring
		// 'instastyle
		// 'instasummer
		// 'instasun
		// 'instasunny
		// 'instatattoo
		// 'instatb
		// 'instatbt
		// 'instatea
		// 'instatech
		// 'instatravel
		// 'instatraveling
		// 'instatumblr
		// 'instavsco
		// 'instawed
		// 'instawedding
		// 'instawinter
		// 'ios
		// 'iphone
		// 'iphone3g
		// 'iphone3gs
		// 'iphone4
		// 'iphone5
		// 'iphonegraphic
		// 'iphonegraphy
		// 'iphoneogram
		// 'iphoneographer
		// 'iphoneographers
		// 'iphoneography
		// 'iphoneology
		// 'iphoneonly
		// 'iphonesia
		// 'irox_bw
		// 'jacket
		// 'jackolantern
		// 'jam
		// 'jan1
		// 'jan12014
		// 'jeans
		// 'jellybean
		// 'jersey
		// 'jewel
		// 'jewelry
		// 'jewelrygram
		// 'jewels
		// 'job
		// 'jockey
		// 'joke
		// 'jokes
		// 'joking
		// 'jolly
		// 'juju
		// 'jump
		// 'justask
		// 'justgoshoot
		// 'justin
		// 'justinb
		// 'justinbieberswag
		// 'justindb
		// 'justindrewbieber
		// 'justquestion
		// 'katy
		// 'katycat
		// 'katycats
		// 'katykat
		// 'katykats
		// 'katyperry
		// 'keepitsimple
		// 'kick
		// 'kickflip
		// 'kickinit
		// 'kickit
		// 'kickoff
		// 'kicks
		// 'kickstagram
		// 'kid
		// 'kids
		// 'kik
		// 'kikit
		// 'kikme
		// 'kikmebored
		// 'kikmee
		// 'kikmeguys
		// 'kikmemaybe
		// 'kikmeplease
		// 'kikmessage
		// 'kikmessanger
		// 'kikmessenger
		// 'kikplease
		// 'kikster
		// 'kindle
		// 'kiss
		// 'kisses
		// 'kitten
		// 'kittens
		// 'kitty
		// 'knockout
		// 'knowledge
		// 'kp
		// 'l4l
		// 'lady
		// 'lake
		// 'laptops
		// 'lash
		// 'lashes
		// 'laugh
		// 'laughing
		// 'leaf
		// 'leap
		// 'leavequestions
		// 'leaves
		// 'leeyum
		// 'leeyumm
		// 'leeyumpayne
		// 'lessismore
		// 'letsgobroncos
		// 'letsgosomewhere
		// 'letskik
		// 'liam
		// 'liampayne
		// 'library
		// 'life
		// 'lifeofadventure
		// 'lifestyle
		// 'light
		// 'lights
		// 'lightsout
		// 'like4like
		// 'likeall
		// 'likealways
		// 'likeback
		// 'likebackteam
		// 'likeforlike
		// 'liker
		// 'likes
		// 'likes4likes
		// 'likesforlikes
		// 'liketeam
		// 'lil
		// 'lilo
		// 'liltunechi
		// 'lilwayne @lilwayneofficial_
		// 'lines
		// 'lip
		// 'lipring
		// 'lips
		// 'lipstick
		// 'liquor
		// 'listentothis
		// 'literate
		// 'literature
		// 'little
		// 'live
		// 'liveauthentic
		// 'livefolk
		// 'lmao
		// 'lmfao
		// 'lol
		// 'longboard
		// 'longboarding
		// 'longhair
		// 'longhairdontcare
		// 'look
		// 'lookbook
		// 'lookingup
		// 'lookoftheday
		// 'lookup
		'loveheels',
		// 'luke
		// 'lukehemmings
		// 'lukey
		// 'lunch
		// 'macro
		// 'macro_creature_feature
		// 'macrogardener
		// 'macrophotography
		// 'mahomie
		// 'mahomieforever
		// 'mahomiegram
		// 'mahomies
		// 'mahone
		// 'makeup
		// 'malik
		// 'malikbaby
		// 'man
		// 'mane
		// 'marathon
		// 'marriage
		// 'mascara
		// 'masterpiece
		// 'mc_embed_signup{background:
		// 'me
		// 'meditate
		// 'meditation
		// 'melody
		// 'memories
		// 'message
		// 'messageme
		// 'michael
		// 'michaelclifford
		// 'mike
		// 'miley
		// 'mileycyrus
		// 'mileyraycyrus
		// 'mind
		// 'minimal
		// 'minimalhunter
		// 'minimalisbd
		// 'minimalism
		// 'minimalismo
		// 'minimalist
		// 'minimalista
		// 'minimalistic
		// 'minimalistics
		// 'minimalninja
		// 'minimalobsession
		'minimalove',
		// 'minimalplanet
		// 'miss
		// 'mitt
		// 'mlb
		// 'mobile
		'model',
		// 'modestclothing
		// 'modesty
		// 'modifications
		// 'mom
		// 'money
		// 'monoart
		// 'monochromatic
		// 'monochrome
		// 'monotone
		// 'montana
		// 'moon
		// 'moonlight
		// 'morn
		// 'morning
		// 'mother
		// 'motivation
		// 'motorbike
		// 'motorcycle
		// 'motorcycles
		// 'movie
		// 'movies
		// 'moviestar
		// 'muffler
		// 'mug
		// 'multicolor
		// 'multicolored
		// 'mural
		// 'muscle
		// 'music
		// 'my
		// 'myModal').modal('hide')" class="btn btn-success"></div>
		// 'myModal').modal('show');
		// 'mygrind
		// 'myjam
		// 'myjob
		// 'mylook
		// 'mytravelgram
		// 'nail
		// 'nailart
		// 'nailpolish
		// 'nails
		// 'navel
		// 'navy
		// 'nba
		// 'nerd
		// 'net
		// 'neversaynever
		// 'neverstopexploring
		// 'newsong
		// 'newyear
		// 'newyears
		// 'newyears2015
		// 'newyearscelebration
		// 'newyearsday
		// 'newyearseve
		// 'newyearsparty
		// 'newyearsresolution
		// 'nfl
		// 'nialhoranfacts
		// 'niall
		// 'nialler
		// 'niallerhoran
		// 'niallers
		// 'niallerwins
		// 'niallhoran
		// 'niallimagine
		// 'niallisbeautiful
		// 'nialljameshoran
		// 'nicekicks
		// 'night
		// 'nightowl
		// 'nighttime
		// 'nightynight
		// 'nike
		// 'ninernation
		// 'niners
		// 'ninersfaithful
		// 'nobodysperfect
		// 'nofilter
		// 'noir
		// 'nola
		// 'nook
		// 'ocean
		// 'oct
		// 'october
		// 'office
		// 'old
		// 'ollie
		// 'onedirection
		// 'ones
		// 'online
		// 'onlinegaming
		// 'ootd
		// 'ootdshare
		// 'opi
		// 'opinions
		// 'orange
		// 'ornaments
		// 'out
		// 'outfit
		// 'outfitoftheday
		// 'outfitpost
		// 'overcast
		// 'ovo
		// 'ovoxo
		// 'pads
		// 'page
		// 'pages
		// 'palettes
		// 'pants
		// 'paper
		// 'parties
		// 'partofme
		// 'party
		// 'partying
		// 'partymusic
		// 'pass
		// 'passout
		// 'pasteup
		// 'payday
		// 'payne
		// 'peace
		// 'peepmysneaks
		// 'peer
		// 'pen
		// 'pencil
		// 'peoplescreatives
		// 'perfect
		// 'perfectcurls
		// 'perry
		// 'perspective
		// 'pet
		// 'petal
		// 'petals
		// 'pets
		// 'pets_of_instagram
		// 'petsagram
		// 'petstagram
		// 'phone
		// 'photo
		// 'photooftheday
		// 'photos
		// 'pic
		// 'pickles
		// 'picoftheday
		// 'pics
		// 'picture
		// 'pictures
		// 'pierced
		// 'piercing
		// 'piercingaddict
		// 'piercings
		// 'pink
		// 'pitcher
		// 'plants
		// 'platgorm
		// 'play
		// 'player
		// 'playing
		// 'playinggames
		// 'pleasecomment
		// 'pleasefollow
		// 'pleaselike
		// 'pleaseshoutout
		// 'plot
		// 'polish
		// 'polo
		// 'ponies
		// 'pony
		// 'pop
		// 'popularpic
		// 'portrait
		// 'pouring
		// 'powder
		// 'practice
		// 'pray
		// 'prayers
		// 'praying
		// 'presents
		// 'preto
		// 'pretty
		// 'primers
		// 'pub
		// 'puck
		// 'pucklife
		// 'puddle
		// 'pumpkin
		// 'pumpkinpatch
		// 'pumpkins
		// 'pup
		// 'puppy
		// 'purse
		// 'pushpullgrind
		// 'quarterback
		// 'quest4six
		// 'questforsix
		// 'question
		// 'questions
		// 'quote
		// 'quoteoftheday
		// 'quotes
		// 'race
		// 'racing
		// 'rain
		// 'rainbow
		// 'rainbowcolors
		// 'raining
		// 'rainyday
		// 'rainydays
		// 'rainydayz
		// 'rainyweather
		// 'rap
		// 'rapper
		// 'ravens
		// 'ravensfan
		// 'ravensnation
		// 'raylewis
		// 'rayray
		// 'read
		// 'reader
		// 'reading
		// 'readinglist
		// 'ready
		// 'red
		// 'redandgold
		// 'redhair
		// 'reef
		// 'reeftank
		// 'reflection
		// 'related
		// 'religion
		// 'reminisce
		// 'reminiscing
		// 'remix
		// 'repeat
		// 'rest
		// 'rich
		// 'ride
		// 'rideout
		// 'rider
		// 'riders
		// 'riding
		// 'rih
		// 'rihanna
		// 'rihannadiamonds
		// 'rihannafenty
		// 'rihannanavi
		// 'rihannanavy
		// 'rihnavy
		// 'rim
		// 'rims
		// 'rink
		// 'ripped
		// 'riri
		// 'rnb
		// 'road
		// 'robyn
		// 'romance
		// 'rosa
		// 'roygbiv
		// 'run
		// 'runchat
		// 'runhappy
		// 'runner
		// 'runners
		// 'running
		// 'runtoinspire
		// 's4s
		// 'saltwater
		// 'samsung
		// 'samsunggalaxy
		// 'samsunggalaxys2
		// 'sand
		// 'sanfrancsico
		// 'santa
		// 'santaclaus
		// 'saysomething
		// 'sayyourejustafriend
		// 'sb47
		// 'sb48
		// 'scale
		// 'scared
		// 'scary
		// 'school
		// 'score
		// 'scorpion
		// 'sea
		// 'seahawks
		// 'seahawksnation
		// 'seashore
		// 'season
		// 'seasons
		// 'seattle
		// 'seattleseahawks
		// 'seavsden
		// 'secondbase
		// 'seenonmyrun
		// 'sel
		// 'selala
		// 'selena
		// 'selenagomez
		// 'selenamariegomez
		// 'selenator
		// 'selenators
		// 'selfie
		// 'selfienation
		// 'selfies
		// 'selfietime
		// 'selly
		// 'sellyselena
		// 'sf49ers
		// 'sfniners
		// 'shamelessselefie
		// 'shine
		// 'shiny
		// 'shirt
		// 'shoe
		// 'shoot
		// 'shopping
		// 'shore
		// 'shot
		// 'shout
		// 'shoutout
		// 'shoutout4shoutout
		// 'shoutoutback
		// 'shoutouter
		// 'shoutoutforshoutout
		// 'shoutouts
		// 'shredded
		// 'siblings
		// 'silhouette
		// 'silly
		// 'simple
		// 'simpleandpure
		// 'simplicity
		// 'singer
		// 'singing
		// 'sis
		// 'sister
		// 'sisters
		// 'sk8
		// 'sk8er
		// 'sk8ing
		// 'sk8ordie
		// 'skate
		// 'skateanddestroy
		// 'skateboard
		// 'skateboarding
		// 'skateeverydamnday
		// 'skatepark
		// 'skatephotoaday
		// 'skater
		// 'skatergirl
		// 'skaterguy
		// 'skatespot
		// 'skating
		// 'sketch
		// 'sketchbook
		// 'skies
		// 'skirt
		// 'sky
		// 'skyback
		// 'skyline
		// 'sleep
		// 'sleeping
		// 'sleeptime
		// 'sleepy
		// 'sleepyhead
		// 'sleevetattoo
		// 'sluggish
		// 'slurp
		// 'small
		// 'smartphone
		// 'smile
		// 'smilers
		// 'smiles
		// 'snap
		// 'snapchat
		// 'snapchatit
		// 'snapchatme
		// 'snapchatmegirl
		// 'snapchatmeimbored
		// 'snapchatmemaybe
		// 'snapchatmenow
		// 'snapchatmeplease
		// 'snapchatmguys
		// 'snapchatster
		// 'snapit
		// 'snapshot
		// 'sneaker
		// 'sneakerfiend
		// 'sneakerfreak
		// 'sneakerhead
		// 'sneakerheads
		// 'sneakerholics
		// 'sneakerporn
		// 'sneakers
		// 'snooze
		// 'snow
		// 'snowfall
		// 'snowflakes
		// 'snowing
		// 'so
		// 'so4so
		// 'soback
		// 'sobackteam
		// 'socality
		// 'soccer
		// 'soccerball
		// 'soccergame
		// 'solecollector
		// 'soleonfire
		// 'song
		// 'songs
		// 'sopretty
		// 'soul
		// 'spamme
		// 'sparkles
		// 'speed
		// 'spiritual
		// 'spirituality
		// 'splash
		// 'spoiler
		// 'spooky
		// 'sport
		// 'sports
		// 'sportscar
		// 'sportscars
		// 'sprayart
		// 'spring
		// 'springtime
		// 'squat
		// 'stack
		// 'stacks
		// 'stadium
		// 'stanleycup
		// 'star
		// 'statigram
		// 'stayabstract
		// 'staystrong
		// 'staywarm
		// 'stencil
		// 'stencilart
		// 'stickerart
		// 'stone
		// 'stones
		// 'stories
		// 'story
		// 'str8hdr
		// 'straight
		// 'straighthair
		// 'street
		// 'streetart
		// 'streetartistry
		// 'streetbike
		// 'streetdreamsmag
		// 'streetphotography
		// 'strength
		// 'stretch
		// 'strong
		// 'student
		// 'students
		// 'studio
		// 'stuffing
		// 'stunt
		// 'stunting
		// 'style
		// 'styles
		// 'stylish
		// 'summer
		// 'summertime
		// 'summerweather
		// 'sun
		// 'sunday
		// 'sunlight
		// 'sunny
		// 'sunnyday
		// 'sunnydays
		// 'sunrays
		// 'sunrise
		// 'sunset
		// 'sunshine
		// 'superbowl
		// 'superbowl2013
		// 'superbowl2014
		// 'superbowl47
		// 'superbowl48
		// 'superbowlxlvii
		// 'superbowlxlviii
		// 'supermoto
		// 'swag
		// 'swagg
		// 'swagger
		// 'sweat
		// 'sweet
		// 'swift
		// 'swiftie
		// 'swifties
		// 'swim
		// 'swimming
		// 'swing
		// 'swole
		// 'takecare
		// 'talented
		// 'tall
		// 'tar
		// 'tasty
		// 'tat
		// 'tats
		// 'tatted
		// 'tattedup
		// 'tattoist
		// 'tattoo
		// 'tattooed
		// 'tattoos
		// 'tatts
		// 'taylor
		// 'taylorswift
		// 'tb
		'tbt',
		// 'tbts
		// 'team
		// 'teamdroid
		// 'teamfollowback
		// 'teamfslcback
		// 'teammanning
		// 'teamtunechi
		// 'teamweezy
		// 'teaoftheday
		// 'teastagram
		// 'teatime
		// 'tech
		// 'techie
		// 'technology
		// 'techy
		// 'teenagedream
		// 'texas
		// 'textbook
		// 'textbooks
		// 'textgram
		// 'thankful
		// 'thanks
		// 'thanksgiving
		// 'theatre
		// 'thecarter
		// 'thehijabstyle
		// 'thesun
		// 'thirdbase
		// 'thirst
		// 'thirsty
		// 'throw
		// 'throwback
		// 'throwbackthursday
		// 'throwbackthursdays
		// 'throwbackthursdayy
		// 'time2run
		// 'tiny
		// 'tire
		// 'tired
		// 'tires
		// 'tistheseason
		// 'todayimwearing
		// 'todaysoutfit
		// 'toddler
		// 'toetouch
		// 'together
		// 'tomlinson
		// 'tommo
		// 'topvsco
		// 'touchdown
		// 'tourism
		// 'tourist
		// 'town
		// 'trailrun
		// 'trailrunner
		// 'trailrunning
		// 'train
		// 'trainhard
		// 'training
		// 'travel
		// 'travelgram
		// 'traveling
		// 'travelingram
		// 'travelling
		// 'treat
		// 'tree
		// 'trees
		// 'trendy
		// 'trick
		// 'trickortreat
		// 'trip
		// 'tropical
		// 'tropicalfish
		// 'true
		// 'trukfit
		// 'trust
		// 'tshirt
		// 'tunechi
		// 'turkey
		// 'turkeyday
		// 'tweegram
		// 'twentys
		// 'twilight
		// 'umbrella
		// 'unapologetic
		// 'unforgettable
		// 'unhas
		// 'unitedinorange
		'urban',
		// 'urbanart
		// 'urbanwalls
		// 'vacation
		// 'vacationtime
		// 'vault
		// 'vehicle
		// 'vehicles
		// 'vibrant
		// 'victorious
		// 'video
		// 'videogameaddict
		// 'videogames
		// 'videos
		// 'view
		// 'violet
		// 'visiting
		// 'visualsgang
		// 'visualsoflife
		// 'vsco
		// 'vsco_hub
		// 'vscoapp
		// 'vscoartist
		// 'vscoaward
		// 'vscobest
		// 'vscobrasil
		// 'vscocam
		// 'vscocamgram
		// 'vscocamonly
		// 'vscocamphotos
		// 'vscocool
		// 'vscodaily
		// 'vscoedit
		// 'vscoeurope
		// 'vscoexpo
		// 'vscofeature
		// 'vscofilm
		// 'vscogallery
		// 'vscogang
		// 'vscogood
		// 'vscogram
		// 'vscogrid
		// 'vscoism
		// 'vscolife
		// 'vscomania
		// 'vscomoscow
		// 'vsconature
		// 'vscoonly
		// 'vscoph
		// 'vscophile
		// 'vscophoto
		// 'vscorussia
		// 'vscostyle
		// 'vscoturkey
		// 'vscovibe
		// 'vscovisuals
		// 'wacky
		// 'wake
		// 'wakeup
		// 'wakingup
		// 'walklikeus
		// 'wall
		// 'wallporn
		// 'warm
		// 'water
		// 'waterfoam
		// 'waves
		// 'wayne
		// 'wayniac
		// 'weather
		// 'webstagram
		// 'wedding
		// 'weddingcake
		// 'weddingday
		// 'weddingdress
		// 'weddinggown
		// 'weddingparty
		// 'weezy
		// 'weezyf
		// 'whatiwore
		// 'whatiworetoday
		// 'wheel
		// 'wheels
		// 'white
		// 'wild
		// 'wildlife
		// 'win
		// 'winning
		// 'winter
		// 'winter2014
		// 'wintertime
		// 'wisdom
		// 'witty
		// 'wiw
		// 'wiwt
		// 'words
		// 'work
		// 'working
		// 'workinglate
		// 'workout
		'wristgame',
		// 'xlvii
		// 'xlviii
		// 'xmas
		// 'xo
		// 'yardline
		// 'yards
		// 'years
		// 'yellow
		// 'ymcmb
		'yolo',
		// 'young
		// 'youngmoney
		// 'yum
		// 'yummy
		// 'zainmalik
		// 'zayn
	],

	# Write different ways of saying hello in comments.
	# These are used randomly when generating comments
	// 'hello' => [
	// 	'Hey',
	// 	'Hello',
	// 	'Hey there',
	// 	'Hi',
	// ],

	# Write different ways of saying complimenting the image in comments.
	# These are used randomly when generating comments
	// 'praise' => [
	// 	', your picture is really nice',
	// 	', you should visit on YOUR_WEBSITE',
	// 	', cool stuff',
	// 	', have you seen YOUR_BRAND_NAME?',
	// ],
];
