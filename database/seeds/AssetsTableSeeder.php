<?php

use Illuminate\Database\Seeder;
use App\Asset;
use App\AssetDetail;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$barang = array(
		  array('id' => '1','nama_barang' => 'Laptop','merk' => 'Lenovo/Z41-70','spesifikasi' => 'Lenovo Z41-70 is a multimedia notebook with reasonable price. A 5th generation Intel Core processor is inside this notebook. The processor choices include Intel Core i3-5010U clocked at 2.1GHz, i5-5200U with Turbo Boost up to 2.7GHz, and i7-5500U with Turbo Boost up to 3.0GHz. The i3 and i5 processors have 3 MB of L3 cache, while the i7 processor has 4 MB of L3 cache. All of them have integrated Intel HD Graphics 5500. It’s a good laptop for entertainment because it has a high-resolution 14.0-inch display. With a brightness of 200 nits, the display’s resolution is 1920 x 1080 pixels. It gives you spacious storage with up to 1 TB 5400 RPM + 8 GB SSHD. The new 14-inch Lenovo Z series supports up to 12 GB DDR3L.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1453943103.jpg','kategori' => 'ASSET'),
		  array('id' => '2','nama_barang' => 'PC Desktop PC High Performance','merk' => 'HP','spesifikasi' => 'PC High Performance  Fungsi :
		Komputasi yang dibutuhkan untuk performansi perhitungan cepat
		Spesifikasi minimum :
		Intel Core i7-3770, 6GB (1x 4GB+1x2GB) DDR3, 1TB HDD, DVD?RW, VGA NVIDIA GeForce GT 640 4GB, GbE NIC, WiFi, Win8 64bit
		Monitor min. 18.5?
		Warranty minimum : 3 tahun sparepart
		Surat dukungan principal dan distributor resmi','no_klas' => '7546','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '3','nama_barang' => 'Laptop','merk' => 'Fujitsu/Lifebook AH564','spesifikasi' => 'Intel core i7-4702MQ
		16 GB (2x4 GB) DDR3 PC12800
		1 TB HDD
		Blue Ray
		WiFi
		VGA NVidia GeForce GT620LM 7GB
		Camera
		15.6 WXGA','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430796875.jpg','kategori' => 'ASSET'),
		  array('id' => '4','nama_barang' => 'Power quality analyzer','merk' => 'Hioki/PW 3198','spesifikasi' => 'Mengukur tegangan, arus, daya listrik dan harmoniknya serta event recording. Memenuhi standard IEC6100-4-30 Class A. High-precision, CATIV 600V, widedynamic input range, sampai 6000V peak. Dapat digunakan mengukur listrik 1 fasa dan 3 Fasa. Termasuk 4  flexible clamp on sensor 500/5000A.   Termasuk Carrying case hard, Memory SD Card 2GB.  Termasuk AC adapter and rechargeable battery pack .  Spesifikasi external interface: SD card, RS-232C, LAN, USB2.0 interface dan external control interface.  Termasuk software aplikasi untuk analisis.  Garansi minimal 2 tahun.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444900878.jpg','kategori' => 'ASSET'),
		  array('id' => '5','nama_barang' => 'Power Suply','merk' => 'Pasco/SF-9586','spesifikasi' => 'Current 0,1 mA at 6KV,
		1,8 mA at 4KV, 
		Meter Scale  0-6,5 KV, 
		Power Source 115-220 VAC, 50/60 Hz ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '6','nama_barang' => 'PC Office','merk' => 'PC Core i3 HP Pro 3330MT','spesifikasi' => 'Desktop PC Core i3 HP Pro 3330MT Intel Core i3-2120 Processor (3MB Cache, 3.3GHz 2 Cores), Intel H61 Express Chipset , Memory 2GB DDR3 1333MHz, Harddisk 500 GB SATA 7200 RPM, SATA Supermulti DVDRW, 15-in-1 Media Card Reader, Integrated Intel Grapchic HD 2000/3000, Integrated Gigabit LAN, Parralel Port, Serial Port, Internal Speaker,USB keyboard & USB Mouse, OS DOS, Monitor LCD 20','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430985820.jpg','kategori' => 'ASSET'),
		  array('id' => '7','nama_barang' => 'Scanner Flatbed','merk' => 'Fujitsufl-6130 ','spesifikasi' => 'A4, color, 600 dpi optical, 30 ppm 60 ipm, Automatic Document, Feeder (ADF), USB, Double Side','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444964723.jpg','kategori' => 'ASSET'),
		  array('id' => '8','nama_barang' => 'Array Microphone','merk' => 'quivalent to BSWA 1/4 "/MPA416','spesifikasi' => 'Include Cable Connectors :
		CSB005 : to BNC Cables 5 M (2 unit)
		CSB010 : to BNC Cables 10 M (2 unit)
		','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '9','nama_barang' => 'Automatic Transfer Switch','merk' => 'Kohler Power Sistem/RDT 200 A','spesifikasi' => 'Spec minimum 200 A ATS
		3 Phase
		Fereq 50 Hz
		Voltage 220V','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '10','nama_barang' => 'Mesin Akses Kontrol','merk' => 'Solution/x-500','spesifikasi' => 'TFT LCD Full color 8 inch (touh screen)','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '11','nama_barang' => 'Arm Development Kit','merk' => 'Friendly Arm/Mini 2440S3C2440','spesifikasi' => 'CPU 400MHz
		RAM 64 MD SDRAM','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '12','nama_barang' => 'Power Meter','merk' => 'Hioki/3169-20','spesifikasi' => 'Mengukur daya listrik dari 1 phase sampai 3 phase
		Clamp sensor 100/1000A','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '13','nama_barang' => 'Cold Sputer Coater with Etch Mode','merk' => 'SPC12','spesifikasi' => 'Cold Sputter Coater with Etch Mode SPC12
		Input Power : 208V - 240V, 50/60 Hz, < 1000W ( including pump)
		Specimen chamber
		Fused glass tube, 100 mm Dia. x 130mm Height
		Stainless steel flange
		Specimen stage 
		40 Dia. (Can coating 6 SEM sample on one stage, 
		Height is adjustable
		Vacuum Accessories 
		- Vane rotary vacuum pump 226L/min(external ) with Pirani gauge Vapor trap prevent back streaming of oil into the vacuum chamber
		- Stainless steel bellows with KF16 adaptor and quick clamps & vapor trap
		- Two stage exhaust Filter on vacuum pum to eleminate oil vapor contimination
		High purity gold foil target 
		the system requires a Ar gas tank with pressure regulator which is not included.
		Gas atmosphere
		One needle valve installed to allow Ar has inlet to achieve better plasma coating
		Inculde Targets : 4N purity Gold foil: 57 mm dia. x 0.12 mm (Included and pre-installed on coater )
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '14','nama_barang' => 'Audio Interface','merk' => 'BSWA/','spesifikasi' => '8 Input / 8 Output
		8 Preamps with Phantom Power
		MX Core DSP
		MIDI Interface
		S/PDIF I/O
		Pro Tools SE Software
		Mix up to 24 Tracks
		Over 100 Virtual Instruments
		Mac OS X
		Windows XP/Vista','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444872992.jpg','kategori' => 'ASSET'),
		  array('id' => '15','nama_barang' => 'Digital Oscilloscope        ','merk' => 'Agilent DSO 1014A (ok)','spesifikasi' => '100 MHz bandwidth,   4 analog channels,     2 GSa/s sample rate half channel, 1 GSa/s each , annel
		20 kpts memory half channel, 10 kpts each channel, 5.7-inch color LCD display with wide viewing angle, True zoom’ mode for viewing big picture and details simultaneously, 23 automatic measurements like frequency and V p-p, Sequence mode allows record and playback of captured waveforms, Selectable band pass filtering, Advanced triggering captures elusive signals, Go/no go mask testing automatically detects deviant waveforms, Waveform math and FFT functions provide information instantly, Front panel overlay, GUI and manual available in 11 languages, Standard 3-year warranty','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1437725914.jpg','kategori' => 'ASSET'),
		  array('id' => '16','nama_barang' => 'Bor Duduk','merk' => 'MTS/Max 13mm','spesifikasi' => '220 Volt Input power
		Max 13mm','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '17','nama_barang' => 'Bor Duduk PCB','merk' => 'Molar','spesifikasi' => '220 VAC 
		Max 3mm
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '18','nama_barang' => 'Lux Meter','merk' => 'Hioki/3423','spesifikasi' => 'Display: 0.5  LCD, 3 1/2 digits, Max indication 1999 
		1. Sensor: exclusive photo diode & color correction filter 
		2. Operating humidity range: <80% 
		3. Operating temperature range: 32? to 122? F (0? to 50? C) 
		4. Weight: approximately 7oz. (195g) with battery installed 
		5. Power supply: (1) 9v alkaline battery 
		6. Power current: approximately DC 2.7mA 
		7. Over input display: Indication of   1   
		Dimensions: 
		1. Meter: 5.2  x 2.8  x 1  (131 x 70 x 25mm) 
		2. Sensor probe: 3.2  x 2.2  x 0.3  (82 x 55 x 7mm) ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '19','nama_barang' => 'Mikroskop Digital','merk' => 'DYNOLAB/DinoLite Pro2 AD-4132T','spesifikasi' => 'Handheld Digital Microscope Digital Microscope, 12~220x variable magnification, 1280X1024 pixels, USB, removable nozzles, polarizer function, and accurate measurement with calibration features','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '20','nama_barang' => 'Hot Plate Stirer','merk' => 'Biomega/Katalog H4000-HS230','spesifikasi' => 'Hot Plate Stirer Biomega Katalog H4000-HS230 Biomega/ Katalog H4000-HS230','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1431681858.jpg','kategori' => 'ASSET'),
		  array('id' => '21','nama_barang' => 'Ultrasonic Cleaner','merk' => 'Bensonic/B2510EMT ','spesifikasi' => '-+2.6L','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '22','nama_barang' => 'Mikroskop Digital','merk' => 'DYNOLAB/MS-35B','spesifikasi' => 'Handheld Digital Mikroscope Table Stand, 8 inch, Multi-Amgle, Portable','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '23','nama_barang' => 'Luminance Meter','merk' => 'konica Minolta/SLR','spesifikasi' => 'Type SLR spot colorimeter for measuring light-source and surface
		luminance and chromaticity
		Acceptance angle    1°
		Optical system    85mm f/2.8 lens; SLR viewing system; flare factor less than 1.5%
		Angle of view    9° with 1° measurement area indication
		Focusing distance    1014mm (40 in.) to infinity, Receptors    3 silicon photocells filtered to detect primary stimulus
		values for red, green, and blue light, Spectral response    Closely matches CIE 1931 Standard Observer curves, Response time    FAST: Sampling time: 0.1s, Time to display: 0.8 to 1.0s; SLOW: Sampling time: 0.4s, Time to display: 1.4 to 1.6s
		Luminance units: cd/m2 or fL (switchable), Measuring range    FAST: 0.01 to 299,000cd/m2 (0.01 to 87,530fL); SLOW:
		0.01 to 49,900cd/m2 (0.01 to 14,500fL), Accuracy    Luminance (Y): ±2% of reading ±1 digit, Chromaticity (x,y): ±0.004 (Illuminant A measured at ambient, temperature of 18 to 28°C/64 to 82°F), Repeatability    Luminance (Y): ±0.2% of reading ±1 digit, Chromaticity (x,y): FAST: Y 100cd/m2 or above: ±0.001; 48.1 to, 99.9cd/m2: ±0.002; Below 48.1cd/m2: Below measurement range, SLOW: Y 25.0cd/m2 or above: ±0.001; 12.0 to 24.9cd/m2: ±0.002; Below, 12.0cd/m2: Below measurement range (Measurement subject: Illuminant A), Target value    1; set by measurement or numerical input
		Measurement modes    Absolute color: Yxy; Color difference: &#916;(Yxy), Display    External: LCD; 3 values (Y, x, and y) of 3 digits each with, additional indications, Viewfinder: 3-digit LCD (showing luminance value y ) with LED backlight
		Data communication    RS-232C; baud rate: 4800bps, External control    Measurement process can be started by external device, connected to data output terminal, Power source    One 9V battery; Power can also be supplied via data output terminal, Operating temperature/humidity range    0 to 40°C, relative humidity 85%, or less (at 35°C) with no condensation
		Storage temperature/humidity range    -20 to 55°C, relative humidity 85%, or less (at 35°C) with no condensation
		Standard accessories included:   Lens cap; Eyepiece cap; Protective filter; ND, eyepiece filter; chromaticity chart. Termasuk jaminan/garansi.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '24','nama_barang' => 'Desktop performa tinggi','merk' => 'Dell/XPS 8500','spesifikasi' => 'Processor type 	Intel Core i7
		Processor speed 3.4 MHz
		Graphics Type Discrete
		Secondary Graphics Chipset ATI Radeon HD
		General Information
		UPC Code 884116083764
		Memory size 16.0 MB
		Memory type DDR3
		Memory speed 1600.0 MHz
		Power Supply Wattage 460.0 watts','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '25','nama_barang' => 'Building automation sensor kit','merk' => 'Ubiquity','spesifikasi' => 'Type Power Pro spek minimum Power Pro , mFi Network Power Outlet, 8-Port
		Ports  (1) Ethernet
		Mounting  Wall-Mount Bracket (Kit Included)
		WiFi Standards  802.11b/g/n
		Memory  16 MB RAM, 8 MB Flash
		Operating Temperature  -10 to 45? C
		Operating Temperature  95% RH Max.

		Accessories
		2 unit TS-5-POE
		1 unit Unifi AP Pro
		1 unit AirCam
		1 unit AirCam-Dome
		10 unit mFi mPort Series
		5 unit mFi mSensor Ceiling Mount Motion Sensor
		5 unit mFi mSensor Temperature Sensor
		5 unit mFi mSensor Current Sensor
		5 unit mFi mSensor Door Sensor','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '26','nama_barang' => 'Mobile HMI development kit','merk' => 'Witech/TE6410-S3C6410','spesifikasi' => 'Mobile  HMI Development Kit WITECH Board
		Type :  TE6410-S3C6410 spek minimum                                                                       ?  TE6410 - S3C6410 microcontroller based on the ARM1176JZF-S core, main frequency @ 667MHz; 
		256MB DDRram, 266MHz; ?  2GB NAND Flash; 
		Three serial ports: 2 5-wire RS232 and 1 3-wire RS232; 
		One RS485 Bus; ,One CAN2.0 Bus; 
		One 100M Ethernet port with DM9000AE and indicators; 
		One USB Device interface supporting USB2.0 protocol; 
		One high-speed SD card slot supporting SD Memory and SDIO; 
		One WIFI , One VGA interface with CH7026 supporting 800 x 600 resolution;  Two TV output interfaces; 
		One CMOS came ITU-R BT601/656 8-bit mode; 
		Built-in RTC (Real Time Clock) with back-up battery; 
		One JTAG interface using 2*10pin connector; 
		One temperature sensor; 
		One Infrared receiver; 
		One 2*10pin  1 x GND, 1 x DA, 8 x AD, 10 x IO, 1 x SPI ?  
		Accessories:
		1 x GPS connector
		1 x 3G module 
		1 x WIFI module
		1 x CMOS camera
		1 x LCD 10 .4 
		1 x 

		','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '27','nama_barang' => 'Industrial kontroler','merk' => 'Tecnologic sistem/TS-7558-BOX','spesifikasi' => 'Model : TS-7558-BOX spek minimum  Opto-Isolated I/O, PoE, & CAN  - TS-7558-BOX - 250MHz ARM9 CPU
		64MB DDR-RAM
		256MB SLC XNAND Drive
		1 MicroSD Card Slot
		Customizable 5K LUT OpenCore FPGA
		4 Opto-Isolated 0-40VDC Outputs
		8 Opto-Isolated 30V DC Inputs
		4 12-bit 0-40V DC PWM Outputs
		4 12-bit ADC Channels
		ADC supports 4-20 mA, 0-5V or 0-10V
		4 16-bit Counter/Tachometer Inputs
		1 10/100 Ethernet, Standard PoE
		2 External USB Host Port, 480Mbit/s
		Watchdog Timer
		2 RS-232, 1 RS-485, 1 CAN
		DMX Support
		Accessories
		1 unit TS-7558-64-256XF-BOX
		1 set KIT-7558
		1 unit TS-9449-USB
		1 unit PS-12VDC-REG-FC','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '28','nama_barang' => 'Lux Meter','merk' => 'Hioki/3423','spesifikasi' => 'Digital illumination meter, maximum scale of 199,900 lx 
		Easy-to-operate, hand-heid unit 
		From the low light up to a maximum intensity of 199,900lx 
		For illumination equipment, lighting work, and facility management 
		Hiok 3423 is an easy-to-operate hand-held unit that can measure a broad range of luminosities, from the low light provided by induction lighting up to a maximum intensity of 199,900 lx. This device is suited for a wide range of applications involving illumination equipment, lighting work, and facility management.

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '29','nama_barang' => 'Bor Tangan','merk' => 'Bosch','spesifikasi' => 'Mesin Bor Tangan 13 mm, 4 speed, 600 watt ; Boss Germany','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '30','nama_barang' => 'Battery Capacity Tester','merk' => 'Exctech/BT100','spesifikasi' => '- Checks Battery Condition in Seconds while battery is in service
		- On-line Testing without Shutting Down Battery
		- Built-in Datalogger Stores up to 999 Tests
		- Simultaneously Measures Battery Resistance and Voltage
		- Windows 95/98/NT/2000/ME/XP Compatible Software for Downloading Readings to a PC
		- C/W all the required accessories:
		- Windows? Software w/Cable 
		- Kelvin Alligator Clips 
		- Kelvin Test Leads 
		- Batteries','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '31','nama_barang' => 'Digital Thermometer','merk' => 'Extech/EA11A','spesifikasi' => 'EasyView Type K Single Input Thermometer Specifications : Temperature (Type K) -58 to 1999 oF (-50 to 1300 oC), 
		Basic Accuracy 0.3% rdg, Resolution 0.1 o/1 o, 
		Memory Manual store/recall up to 150 readings, 
		Dimensions 5.9 x 2.8 x 1.3  (150 x 72 x 35mm), 
		Weight 8.3oz (235g)
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '32','nama_barang' => 'Tachometer','merk' => 'Extech/461995','spesifikasi' => 'Tachometer Digital Tachnometer DT-1236L  
		Specifications
		Photo Range  10 to 99,999 rpm
		Resolution  0.1 rpm &#65533;&#65533;&#65533; 999.9 rpm; 1 rpm > 1000 rpm
		Contact Range  0.5 to 19,999 rpm
		Resolution  0.1 rpm &#65533;&#65533;&#65533; 999.9 rpm; 1 rpm > 1000 rpm
		Surface Speed Range  0.05 to 1,999.9 mpm/0.2 to 6560 fpm
		Resolution  0.01mpm &#65533;&#65533;&#65533; 99.99 mpm; 0.1 mpm > 100 mpm/0.1 fpm &#65533;&#65533;&#65533; 999.9 fpm; 1 fpm >1000 fpm
		Features: Photo tachometer and contact tachometer in one precision instrument
		Surface speed measurements in fpm or mpm
		Retains Min/Max and last reading for later recall
		Automatic reverse display direction depending on which measurement mode you are in
		Laser light for improved accuracy at a distance in photo mode
		Highly visible LCD readout
		Supplied With: 3 contact adapters (2 cones, 1 funnel)
		surface speed wheel
		reflective tape
		hard carrying case
		Accuracy  &#65533;&#65533;(0.5% + 1 digit)
		Sampling Rate  Photo: 1 sec. over 60 rpm;
		Contact  1 sec. over 6 rpm
		Detection Distance  50 to 2,000mm
		Laser  Cl','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '33','nama_barang' => '750 Interface USB ','merk' => 'Pasco/ScienceWorkshop 750
		','spesifikasi' => 'Included Equipment

		    ScienceWorkshop 750 USB interface box
		    AC Adapter, 12 VDC, 60 Hz, 40 W
		    USB Cable

		Additional Equipment Required

		    USB-compatible computer
		    Any PASCO ScienceWorkshop Sensor
		    Datastudio software, version 1.7 or later

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '34','nama_barang' => 'Power Supply','merk' => 'Valleman/PS3010U','spesifikasi' => 'Features

		    LED display for voltage and current
		    fine adjustment of voltage and current
		    protection mode: current-limiting and short-circuit protection
		    fuse-protected
		    housing: plastic front panel / other panels made of steel
		    color: white-gray

		Specifications

		    output voltage: 0-30V adjustable
		    output current: 0-10A adjustable
		    ripple voltage: 1mV
		    ripple current: 5mA
		    dimensions: 12 13/64  x 10 7/16  x 5 5/16 
		    weight: 26.46lbs','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446542507.jpg','kategori' => 'ASSET'),
		  array('id' => '35','nama_barang' => 'Power Amplifier','merk' => 'Pasco/CI-6552A','spesifikasi' => '    	
		Up to ±10 V at 1 Amp
		Overload cutoff with LED indicator
		For ScienceWorkshop 750 and 700 Interfaces
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '36','nama_barang' => 'LED TV','merk' => 'Sharp/LC80LE940X','spesifikasi' => '80”, Full HD, 3D, AQUOS LED
		Quattron, X-Gen Panel with UV2A Technology Smart
		AquoMotion Pro, 2D to 3D Conversion
		Skype Ready, Internet Video Streaming YouTube Leanback, Facebook, Twitter
		Web Browser
		DivX + HD Movie USB Playback Enable
		DLNA Client/IP Control Compatible/Wireless LAN Read
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '37','nama_barang' => 'Mikroskop digital','merk' => 'Dino lite/AM7013MZT','spesifikasi' => 'PerbesaranOptik:  10x ~ 50x
		Perbesaran Digital :200x
		Resolusi: 2591 x 1944 piksel
		Fiturtambahan : USB (8-LED) denganmicro touchDn system pengukuran','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444957218.jpg','kategori' => 'ASSET'),
		  array('id' => '38','nama_barang' => 'TV Plasma','merk' => 'LG/LG 50PN','spesifikasi' => 'Screen Size : 50-inch
		Resolution : Full HD 720p
		Refresh Rate : 600Hz Sub-Field Driving
		Picture Wizard II : YES
		Smart TV : NO
		Intelligent Sensor : YES
		Smart Energy Saving : YES
		HDMI/ USB Inputs : 1/1','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '39','nama_barang' => 'Treadmill','merk' => 'Richter/Axiom plus','spesifikasi' => 'Treadmill  Type : Axiom Plus
		Merk RICHTER
		I.  UMUM
		Berfungsi untuk mengukur detak jantung (instrumentasi medik)
		II.  MODUL
		1.5HP DC Continuous Motor 
		LCD Flat blue screen dengan 12 pre-set
		Speed: 1-16 km/h. incline : 0-12%
		Effective running surface : 130 x 41 cm
		Maximum user weight: 110 kg
		Advanced Body fat measurement system
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '40','nama_barang' => 'Kompressor udara Bebicon','merk' => 'Hitachi/3.7P-9.5V5A','spesifikasi' => 'Tank Type : Horizontal
		Operating System : Pressure-switch type
		Maximum Pressure : (MPa) 	0.93
		Cylinder Diameter x Stroke x Number of Cylinders  : L)90mm x 85mm x 1
		H)50mm x 85mm x 1
		Compressor Speed (min-1) : 1000
		Displacement (Liters/min) : 541
		Capacity at Maximum Pressure (Liters) : 440
		Air Tank Capacity : 125
		Power Source : Three Phase
		External Dimensions (W x D x H)mm : 1477 x 429 x 890
		Weight (kg) : 158
		Noise Level (dB)[A] : 74

		Standard Accessories

		Pressure Gauge
		Safety Valve
		Hose Joint
		V-Belt
		Belt Cover
		Silencer
		Stop Valve
		1/4B Air Outlet x 1
		3/8B Air Outlet x 1
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '41','nama_barang' => 'Desktop PC All in one ','merk' => 'Lenovo/B540-573','spesifikasi' => 'Desktop PC Core i5 LENOVO B540 - 57 306488. 
		Intel Core i5-3450S (up to 3.5 GHz, 6M Cache, 5 GT/s), 
		Intel H61 Chipset, Nvidia GForce 615 2GB, 
		4GB DDR3 1333MHz,1TB 7200RPM SATAII,DVDRW Rambo Tray-in, 
		Ethernet 10/100/1000,802.11 b/g/n,Bluetooth 2.1,Wireless ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '42','nama_barang' => 'PC High Performance','merk' => 'HP/Pavillion 500-210d DT','spesifikasi' => 'PC High Performance PC HP Pavillion 500-210d DT PC
		Spesifikasi minimum : Intel Core i7-4770 Processor (3.4 GHz, Cache 8MB), 8GB (2x 4GB) DDR3, 1TB HDD, DVD?RW, VGA NVIDIA GeForce GT 640 4GB, GbE NIC, WiFi, Win8 64bit, HP WLED 20 
		Garansi minimum : 1 tahun agen/distributor resmi Indonesia 
		Surat dukungan principal/distributor resmi.
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '43','nama_barang' => 'Desktop PC Core i7','merk' => 'Dell/Optiplex 990 MT','spesifikasi' => 'Desktop PC Core i7 Dell Optiplex 990 MT ,International Branded. Core i7-2600, 4GB DDR3, 500GB HDD SATA, DVDi+-RW, VGA Intel GMA 4500, Audio, GbE NIC, Win 7 Pro - BUNDLE Monitor 18.5  LCD, Keyboard & mouse USB,Garansi resmi min.1 tahun dari distributor/agen','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '44','nama_barang' => 'UPS
		','merk' => 'ICA/SIN 3100C','spesifikasi' => 'UPS SUA5000RMI5U Internasional Branded
		I.   Umum 
		Alat ini akan menggantikan (dengan baterei cadangan) power dari jala-jala PLN, 
		jika aliran listriknya terganggu 
		II.  Modul
		Line-Interactive, UPS 5000VA / 4000W, 230V, Single-Phase, 5U Rackmount, RS-232 Serial Port, Power Management Software
		III.  Aksesoris/Komponen 
		Kabel-kabel lengkap
		IV.  Peralatan Pendukung 
		-
		V.  Software 
		APC PowerChute Smart-UPS Bundle
		Base storage capacity : 500 GB
		Wi-Fi : Yes','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '45','nama_barang' => 'Desktop PC Dual Core/X Labkomp 24','merk' => 'Acer/Aspire M1800','spesifikasi' => 'Dual Core E5300 ACER M1800 Intel Dual Core E5300 (2.5Ghz, 2MB L2 Cache, 800Mhz, FSB), Chipset NVIDIA GeForce 7050 , 1GB DDRII , 320GB SATA, DVD RW , IEEE, USB Keyboard & Optical Mouse, HDMI port, GigabitLAN, PCI Express? x 16 slot, Card Reader, Acer X153W 16  Wide Screen','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '46','nama_barang' => 'Desktop PC Core i3/X Labkomp 21','merk' => 'ACER Aspire M3910','spesifikasi' => 'ACER Aspire M3910; Specification: Intel(R) Core(R) 13-450 (3.06 Ghz, 4 MB), Chipset Intel H57 Express, 2 Gb DDR3 1333 Mhz, 500 GB HDD SATA, ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '47','nama_barang' => 'Desktop PC Core i3/X Labkomp 1','merk' => 'ACER Aspire/M3910;','spesifikasi' => 'Specification: Intel(R) Core(R) 13-450 (3.06 Ghz, 4 MB), Chipset Intel H57 Express, 2 Gb DDR3 1333 Mhz, 500 GB HDD SATA, Supermulti with label Flash, IEEE, Media Reader 16-in-1, Gigabit LAN, Modem, HDMI Port, PCI Express(R) x 16 slot, PCI Express(R) x 1slot, Two PCI slots, USB Keyboard & Optical Mouse, 2.0 USB Speaker, OS DOS, 15  LCD Monitor','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '48','nama_barang' => 'AC','merk' => 'LG/Split Wallmounted 12.000 Btu/h AC Split','spesifikasi' => 'AC Split Wallmounted 12.000 Btu/h AC Split Wallmounted 12.000 Btu/h Pipa & Insulasi 5m, Dudukan Outdoor 1 unit, Kabel 10m, MCB','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '49','nama_barang' => 'AC','merk' => 'LG/LT C286HLE1','spesifikasi' => 'Power Suplay O/V/H : 1/220-240/50
		Capacity : Cooling 8,2 KW, Heating
		Btu/h : 27,982 Btu/h
		Input power cooling 2,9, heating -
		Compressor type : Twin rotary (tropical) R22
		Dimensi bodi : 840x840x225','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1431682182.jpg','kategori' => 'ASSET'),
		  array('id' => '50','nama_barang' => 'High Performance Computers 1U Rack Server','merk' => 'Supermicro/SuperServer 1042G-TF','spesifikasi' => 'Supermicro SuperServer 1042G-TF Quad Opteron SATA Series Server System Designed for optimal performance, Supermicros Twelve/Eight-Core AMD Opteron 6100 series processor based system is paired with AMD chipset in a high-density 1U form-factor. AS-1042G-TF system is ideal for HPC and minimal-downtime cluster server','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '51','nama_barang' => 'Web Smart','merk' => 'Trendnet/TEG-240WS','spesifikasi' => 'GB Ethernet 24 Port  Trendnet TEG-240WS  24 Port websmart GBE Switch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '52','nama_barang' => 'Infra Red Thermometer','merk' => 'Fluke/574 non contact','spesifikasi' => 'Thermometer Fluke  574 non-Contact  Thermometer 
		    *  Backlit display for poorly lit areas
		    * Last ten temperature readings displayed on bar graph for easy reference
		    * Enhanced optics (distance to spot ratio up to 60:1) allow measurements of smaller objects from farther away
		    * Coaxial three-dot laser sighting system highlights the true diameter of measurement spots at all distances (90% energy)
		    * Extra bright appearing 635nm laser (tested to the same safety and power standards as less bright laser sights) to clearly highlight the targeted area
		    * Close-focus option available for specialized applications
		    * MIN/MAX measurements calculations instantly computed
		    * Audible and visible HI temperature alarm for instant recognition
		    * Comfortable, overmolded pistol grip makes target sighting easy
		    * Adjustable emissivity setting (.01 increments) for more accurate measurement
		    * Durable hard plastic storage case included
		    * DIF/AVG measurement calculations instantly c
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430727840.jpg','kategori' => 'ASSET'),
		  array('id' => '53','nama_barang' => 'Meeting Amplifier','merk' => 'TOA/ZW-770','spesifikasi' => 'UHF wireless portable amplifier','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '54','nama_barang' => 'UHF Wireless Microphone SystemDesktop PC All in ','merk' => 'SHURE/SVX288/PG28','spesifikasi' => 'UHF Wireless Microphone System SHURE  SVX288/PG28   Wireless Microphone System
		- Terdiri dari : Dual Diversity Receiver, dan 2 Handheld Microphone Transmitters.
		- Compatible systems per frequency band (up to): 4
		- Selectable frequencies: 8
		- Included Antennas: Internal 1/4-wave
		- Rack Hardware: (WASRM for 2 single channel receivers, WADRM for dual channel receiver)
		- Transmitter Display: LED
		- Battery, Endurance: 2AA, >10h
		- Environment: Small stage, karaoke, hotels, schools, restaurants
		Working Range (Line of Sight): HI power mode: 75 m (250 ft),LO power mode: 18 m (60 ft).
		- Audio Frequency Response: 50 Hz to 15 kHz.
		- Total Harmonic Distortion (Ref. &#65533;&#65533;48 kHz deviation, 1 kHz tone) : <1%
		- Dynamic Range : 90 dB A-weighted, typical
		- Operating Temperature Range : &#65533;&#65533;&#65533;10&#65533;&#65533;C (14&#65533;&#65533;F) to 50&#65533;&#65533;C (122&#65533;&#65533;F)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430785504.jpg','kategori' => 'ASSET'),
		  array('id' => '55','nama_barang' => 'TV LED Smart TV','merk' => 'LG/42LB650T','spesifikasi' => 'Spesifikasi

		Display 

		Screen size (in.) : 42 , Display Type :
		LED technology , Full HD (1080p) :
		Yes , Resolution : 1920 x 1080,
		Dynamic Contrast Ratio : 8,000,000:1,
		TruMotiona?? : 120 Hz, Colours
		Reproduction (R,G,B) Bit :10 bits ,
		Response Time : 2.4ms, Viewing
		Angle :178A?/178A? , Life Span (hr)
		:30,000 hr .

		Vidio 

		Aspect Ratio :16:9

		INPUT DETAILS

		Cinema 3:2 / 2:2 Pull down Mode : 24p
		Real Cinema (24p 5:5 / 2:2 Pull down)-
		HDMI, Aspect Ratio Correction : 5
		Modes (16:9, Just Scan, Set By
		Program, 4:3, Cinema Zoom), Just
		Scan : HDMI(1080i/1080p/720p)
		Component(1080i/1080p/720p)
		RF(1080i/720p), Colour Temperature:
		3 Modes (Warm, Medium, Cool), AV
		Mode (Cinema/Game/Sport) : Cinema /
		Game, Picture Mode : 7 Modes
		(Intelligent sensor, Vivid, Standard,
		Cinema, Game, isf Expert1, isf
		Expert2), Eye Care (Anti Dazzling) : Yes.

		USB 2.0 MP3,JPEG,DivX (HD/SD),Video

		BROADBAND

		NetCasta?? Entertainment Access* : Yes (WiFi) *Third party services may
		be changed, removed, or inter','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430786716.jpg','kategori' => 'ASSET'),
		  array('id' => '56','nama_barang' => 'LED Smart TV','merk' => 'LG/55LN5710','spesifikasi' => 'USB Video Playback Formats :DivX HD
		Miracast : Yes (Miracast compatible Android device required for this feature)
		LG Tag On (TV to Phone) : Yes (1 x NFC Tag Included.) An NFC enabled Smartphone required.
		LG TV Remote App : Yes (LG TV Remote App on compatible Android (Froyo 2.2+) and iOS devices (iOS 5.0+). 
		Phone must be in range, on the same Wi-Fi network as the TV.)
		Intel® Wireless Display (WiDi) : Yes (Intel WiDi enabled PC must be in range of the TV.)
		Time Machine II : 1.6GB
		Skype™ : Yes (Video call camera (AN-VC400/AN-VC500) required and available for purchase seperately)
		Processor : Dual Core
		Magic Remote Voice : Yes (Compatible) Voice recognition feature is not available in all languages and dialects. 
		Actual performance may vary depending on the language spoken and surrounding environment including ambient noise.
		EPG (SI - 8 days) : Yes
		Network File Browser (DLNA) : Yes
		Simplink (HDMI-CEC): Yes (All HDMI)
		2nd Display : Yes
		MHL (Mobile HD Link) : Yes (1x HDMI Input) MHL enabled Android Smartphone or Tablet & MHL cable required (sold separately).
		Web Browser : Yes (Internet connection required. Internet usage charges and conditions apply.)
		Wi-Fi Built-In : Yes
		Yes
		Yes (1x HDMI Input) MHL enabled Android Smartphone or Tablet & MHL cable required (sold separately).
		Yes (Internet connection required. Internet usage charges and conditions apply.)
		Yes','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430798343.jpg','kategori' => 'ASSET'),
		  array('id' => '57','nama_barang' => 'Laptop ','merk' => 'Toshiba/Satellite L310','spesifikasi' => 'Processor Intel® Pentium® Dual-Core T4200 (2 GHz, FSB 800, Cache 1 MB)
		Chipset Intel 45GL
		Standard Memory GB DDR2 SDRAM PC-5300, MAX. Memory 4 GB (2 DIMMs)
		Video Intel® Graphics Media Accelerator 4500M 268 MB (shared)
		Display 14.1  WXGA TFT, Max. Resolution 1280 x 800, Technology Clear SuperView TFT
		Audio Integrated
		Speakers Integrated
		Hard Drive 250 GB Serial ATA 5400 RPM
		Optical Drive DVD±RW','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446616922.jpg','kategori' => 'ASSET'),
		  array('id' => '58','nama_barang' => 'Kamera Digital','merk' => 'NIKON/SLR D 90','spesifikasi' => 'SLR NIKON SLR D 90 Kamera Digital KIT 10 Mpx Lens Dx 18-105mm','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430788279.jpg','kategori' => 'ASSET'),
		  array('id' => '59','nama_barang' => 'Printer','merk' => 'EPSON Stylus/T11','spesifikasi' => 'Printer InkJet EPSON Stylus T11, A4, 5760x1440 dpi, 22/13 ppm, USB, CD driver','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430788397.gif','kategori' => 'ASSET'),
		  array('id' => '60','nama_barang' => 'Filing Cabinet','merk' => 'Lion','spesifikasi' => '4 Laci','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '61','nama_barang' => 'Printer InkJet','merk' => 'Epson/T-20 + Infuss','spesifikasi' => 'Printer InkJet Epson T-20 + Infuss','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '62','nama_barang' => 'Laptop / Notebook ','merk' => 'Acer/Aspire One n270','spesifikasi' => 'Intel Atom N270 Notebook Acer Aspire One 3 G: Windows? XP Home EditionIntel? Atom? Processor N270 (1.6GHz MB, 512KB L2 cache, 533 FSB), 8.9  WSVGA Acer CrystalBriteTM TFT LCD (1024 X 600 pixel) w/ LED Baklight, 1GB (512MB + 512MB) DDR2, 160GB HDD High Definition Audio, speakers, headphone/line out, microphone in 802.11b/g, Acer SignalUp Wireless Tech. Multi-in-1 card reader slot, SD slot, 3xUSB2.0, VGA, RJ-45, Headphone/speaker/line-out jack, Microphone-in jack, Acer Crystal Eye, 89% full-sized KB, touchpad with scroll zone, 6-Cell (5200 mAh) battery, 3G HSDPA/HSUPA, Black - 1 set. ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430788930.jpg','kategori' => 'ASSET'),
		  array('id' => '63','nama_barang' => 'Spectophotometer','merk' => 'Camspec/ M105/UK','spesifikasi' => 'Camspec/ M105/UK dengan spesifikasi setara berikut : 
		Wavelength range : 335 to 100 nm
		1100.0 nm; Opticss : Single beam;
		Monochromator : 1200 lines/mm grating;
		Bandpass : 12nm ; Wavelength accuracy : +- 2nm; Wavelength repeatability : +-1nm ;
		Stray light : <0.3%T @340nm; hotometric
		ranges : 0-2A, 0-125%T','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430789051.jpg','kategori' => 'ASSET'),
		  array('id' => '64','nama_barang' => 'Audio Mixer','merk' => 'Yamaha/EMX312SC','spesifikasi' => 'Outline	EMX212S	EMX312SC	EMX512SC
		Mixing capability	Mixing channels	4 Mono + 4 Stereo +Return	4 Mono + 4 Stereo	4 Mono + 4 Stereo +Return
		AUX	1 (Effect Send)	1 (Effect Send)	1 (Effect Send)
		MAIN	Stereo	Stereo	Stereo
		Input channel functions	CH1-4 Compressor; 3-band PEQ; CH5-8: 3-band PEQ	CH1-4 Compressor; 3-band PEQ; CH5-8: 3-band PEQ	CH1-4 Compressor; 3-band PEQ; CH5-8: 3-band PEQ
		On-board processors	SPX, 2x 7-band GEQ, YSProcessing	SPX, 2x 7-band GEQ, YSProcessing	SPX, 2x 7-band GEQ, YSProcessing
		I/O	Mic inputs	8	8	8
		Phantom power	+15V DC; ON/OFF	+15V DC; ON/OFF	+15V DC; ON/OFF
		Line inputs	4x Stereo	4x Stereo	4x Stereo
		Control and others	Foot switch, StandBy (All mute)	Foot switch, StandBy (All mute)	Foot switch, StandBy (All mute)
		On-board amplifiers	Maximum output power @4ohms	220W/ch	300W/ch	500W/ch
		Maximum output power @8ohms	120W/ch (100V model), 130W/ch (120V model), 130W/ch (220-240V model)	190W/ch (100V model), 190W/ch (120V model), 180W/ch (220-240V model)	370W/ch (100V model), 350W/ch (120V model), 320W/ch (220-240V model)
		Output selection	L/R, L+R/Monitor	L/R, L+R/Monitor	L/R, L+R/Monitor
		General specifications	EMX212S	EMX312SC	EMX512SC
		Total harmonic distortion	Less than 0.3%	Less than 0.3%	Less than 0.3%
		Frequency response	0, +1.0, -3dB 20Hz-20kHz	0, +1.0, -3dB 20Hz-20kHz	0, +1.0, -3dB 20Hz-20kHz
		Hum & noise level	Equivalent input noise	-115dBu	-115dBu	-115dBu
		Residual output noise	-65dBu (Speaker out); -90dBu (Line out)	-65dBu (Speaker out); -90dBu (Line out)	-65dBu (Speaker out); -90dBu (Line out)
		Crosstalk	-65dB	-65dB	-65dB
		Protection circuit	Load protection	Power switch on/off mute, DC-fault (power supply shutdown/manual reset), Clip limiter (&#8807;THD 1%; compression)	Power switch on/off mute, DC-fault (power supply shutdown/manual reset), Clip limiter (&#8807;THD 1%; compression)	Power switch on/off mute, DC-fault (power supply shutdown/manual reset), Clip limiter (&#8807;THD 1%; compression)
		Amplifier protection	Thermal (heatsink temp &#8807;90 degrees celsius; output mute/auto reset), Vl limiter (RL &#8806;2ohms)	Thermal (heatsink temp &#8807;90 degrees celsius; output mute/auto reset), Vl limiter (RL &#8806;2ohms)	Thermal (heatsink temp &#8807;90 degrees celsius; output mute/auto reset), Vl limiter (RL &#8806;2ohms)
		Power supply protection	Thermal (heatsink temp &#8807;100 degrees celcius; power supply shutdown/manual reset)	Thermal (heatsink temp &#8807;100 degrees celcius; power supply shutdown/manual reset)	Thermal (heatsink temp &#8807;100 degrees celcius; power supply shutdown/manual reset)
		Power requirements	Depend on area of purchase; AC100V, 120V or 220-240V; 50/60Hz	Depend on area of purchase; AC100V, 120V or 220-240V; 50/60Hz	Depend on area of purchase; AC100V, 120V or 220-240V; 50/60Hz
		Power consumption	350W	450W	550W
		Dimensions	W	442.5mm; 17-7/16in	442.5mm; 17-7/16in	442.5mm; 17-7/16in
		H	284mm; 11-3/16in	284mm; 11-3/16in	284mm; 11-3/16in
		D	264mm; 10-3/8in (7U)	264mm; 10-3/8in (7U)	264mm; 10-3/8in (7U)
		Net weight	8kg; 17.6lbs	8kg; 17.6lbs	8kg; 17.6lbs
		Accessories	Owner’s Manual, AC power cord, 2x Rubber stabilizer	Owner’s Manual, AC power cord, 2x Rubber stabilizer	Owner’s Manual, AC power cord, 2x Rubber stabilizer
		Input characteristics

		Input terminal	MIC/LINE	Actual load impedance	For use with nominal	Input level	Connector
		Sensitivity	Nominal	Max. before clip
		CH INPUT 1-4	XLR	MIC	2kohms	50-600 ohm Mics	-60dBu	-35dBu	-15dBu	XLR3-31 type
		LINE	-30dBu	-5dBu	+15dBu
		Phone	MIC	6kohms	600ohm Lines	-50dBu	-25dBu	-5dBu	TRS phone jack
		LINE	-20dBu	+5dBu	+25dBu
		CH INPUT 5/6,7/8	XLR	-	2kohms	50-600 ohm Mics	-60dBu	-35dBu	-15dBu	XLR3-31 type
		Phone	-	10kohms	600ohm Lines	-20dBu	+5dBu	+25dBu	Phone jack
		CH INPUT 9/10,11/12	XLR	-	2kohms	50-600 ohm Mics	-60dBu	-35dBu	-15dBu	XLR3-31 type
		Pin	-	10kohms	600ohm Lines	-20dBu	+5dBu	+25dBu	RCA pin jack
		Output characteristics

		Output terminal	Actual source impedance	For use with nominal	Output level	Connector
		Model	Nominal	Max. before clip
		SPEAKERS [A1,A2,B1,B2]	0.1ohms	4ohm Speakers	EMX512SC	125W	500W	[A1,B1]speakON
		[A2,B2]Phone jack
		EMX312SC	75W	300W
		EMX212S	50W	200W
		MAIN OUT[L,R]	600ohms	10kohm Lines	-	+4dBu	+20dBu	Phone jack
		EFFECT OUT	600ohms	10kohm Lines	-	+4dBu	+20dBu	Phone jack
		MONITOR OUT	600ohms	10kohm Lines	-	+4dBu	+20dBu	Phone jack
		REC OUT[L,R]	600ohms	10kohm Lines	-	-10dBu	+10dBu	RCA pin jack
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430789526.jpg','kategori' => 'ASSET'),
		  array('id' => '65','nama_barang' => 'Smart POE','merk' => 'TP-LINK/TL-SG3424P','spesifikasi' => 'Supports 24 802.3at/af-compliant POE+ ports with a total power supply of 320W
		IP-MAC-Port-VID Binding, ACL, Port Security, DoS Defend, Storm control, 
		DHCP Snooping, 802.1X Authentication and Radius provide you robust security strategies
		L2/L3/L4 QoS and IGMP snooping optimize voice and video application
		WEB/CLI managed modes, SNMP, RMON bring abundant management features','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430797484.jpg','kategori' => 'ASSET'),
		  array('id' => '66','nama_barang' => 'Scanner','merk' => 'Canon/Canoscan lide 700F','spesifikasi' => 'Scanner Type	Flatbed
		Scanning Element	Color Contact Image Sensor (CIS)
		Light Source	Three-color (RGB) LED
		Features	180-degree Open, 3-Way Position, Auto Scan Mode, Filing Function, Film Adapter Unit, Image Correction, One-plug Scanning
		Scanner Buttons	Copy, Scan, PDF, E-mail
		Max. Resolutions	Optical:9600 x 9600 dpi1 film
		Interpolated:19,200 x 19,200 dpi
		Reflective:4800 x 4800 dpi3
		Scanning Mode	Color: 48-bit internal/48 or 24 bit external

		Grayscale: 48-bit internal/16 or 8 bit external
		Max. Document Size	8.5  x 11.7  maximum
		Dimensions (W x D x H)	16.1 (W) x 1.8 (H) x 11.5 (D)
		Weight	4.6 lbs
		Windows:Windows Vista®, Windows XP/20004
		Mac:Mac OS X v.10.3.9 to v10.5x4
		Power Requirements	High Speed USB
		Software	Setup Software & UserÂ°s Guide CD-ROM
		ArcSoft® PhotoStudio®
		MP Navigator EX
		Solution Menu
		Max. Power Consumption	2.5W (1.5W standby)
		Operating Temperature:	41° - 95° F
		Operating Humidity:	10% - 90% RH (20% to 80% RH for film scanning)
		Warranty	Toll-free technical phone support plus 1-year limited warranty with InstantExchange program.5','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430799909.gif','kategori' => 'ASSET'),
		  array('id' => '67','nama_barang' => 'Audio Mixer','merk' => 'Dyna Cord/PowerMate 600','spesifikasi' => 'Maximum Midband Output Power, 1 kHz, THD=1%, Dual Channel: -
		into 4 Ohms 2 x 270 W
		into 8 Ohms 2 x 180 W
		Rated Output Power, THD=0.1%, Single Channel: -
		into 4 Ohms 2 x 300 W
		into 8 Ohms 2 x 150 W
		Maximum Midband Output Power, 1 kHz, THD=1%, Single Channel: -
		into 4 Ohms 2 x 340 W
		into 8 Ohms 2 x 200 W
		Maximum Output Voltage of power amplifi er, no load 43 Vrms
		THD at 1kHz, MBW=80kHz: -
		MIC input to Main L/R output, +16 dBu, typical < 0.006%
		Power amplifi er input to Speaker L/R output < 0.08%
		DIM 30, power amplifi er < 0.03%
		IMD-SMPTE, power amplifi er, 60Hz, 7 kHz < 0.2%
		Frequency Response, -3dB ref. 1kHz: -
		Any input to any Mixer output 15Hz ... 60kHz
		Any input to Speaker L/R output 30Hz ... 40kHz
		Crosstalk, 1kHz: -
		Fader and AUX-Send attenuation > 80 dB
		Channel to channel > 70 dB
		CMRR, MIC input, 1kHz > 80 dB
		Input Sensitivity, all level controls in max. position: -
		MIC input -74 dBu (155 µV)
		LINE Input (Mono) -54 dBu (1.55 mV
		LINE Input (Stereo) -34 dBu (15.5 mV)
		Power Amplifi er Input +6 dBu (1.55 V)
		Maximum Level, mixing desk: -
		MIC inputs + 11 dBu
		Mono Line inputs + 30 dBu
		Stereo Line inputs + 20 dBu
		All other inputs + 20 dBu
		Record Send output + 14 dBu
		All other outputs + 20 dBu
		Input Impedances: -
		MIC 1.8 kOhms
		Insert Return 10 kOhms
		EQ Input and 2 Track Return 15 kOhms
		All other inputs > 15 kOhms
		Output Impedances: -
		Record Send 1 kOhm
		Phones 47 Ohms
		All other outputs 75 Ohms
		Equivalent Input Noise, MIC Input, A-weighted, 150 Ohms -130 dBu
		Noise, Channel inputs to Main L/R outputs, A-weighted: -
		Master fader down -90 dBu
		Master fader 0 dB, Channel fader down -89 dBu
		Master fader 0 dB, Channel fader 0 dB, Channel gain unity -83 dBu
		Signal/Noise-Ratio, power amplifi er, A-weighted 105 dB
		Equalization: -
		LO Shelving ± 15 dB / 60 Hz
		MID Peaking, mono inputs ± 15 dB / 2.4 kHz
		MID Peaking, stereo inputs ± 15 dB / 2.4 kHz
		HI Shelving ± 15 dB / 12 kHz
		Master EQ, 2x7-band, 63, 125, 400, 1k, 2k5, 6k, 12k Hz ± 10 dB
		Power Consumption at 1/8 maximum output power, 4 Ohms 450 W
		Dimensions, (WxHxD), mm 461.5 x 176.5 x 366.5
		Weight, without lid 13kg
		Optional RMK-600 (Rack-Mount-Kit PowerMate600) 112 741, Gooseneck Lamp, 12V/2.4W, 12“, XLR 112 700, FS11 (Footswitch) 110 693','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1430813179.jpg','kategori' => 'ASSET'),
		  array('id' => '68','nama_barang' => 'Monitor LED TV ','merk' => 'LG/42LV3500','spesifikasi' => 'TV type LED-LCD
		Screen size 42 in
		HDMI Ports Qty 3 port(s)
		Timer Functions Sleep
		PC Interface VGA (HD-15)
		Video Interface Component, composite, HDMI
		HDCP Compatible Yes
		Country Kits United States
		ManufacturerLG','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1431052437.jpg','kategori' => 'ASSET'),
		  array('id' => '69','nama_barang' => 'NoteBook','merk' => 'LENOVO/IdeaPad S-10-3 Black','spesifikasi' => 'Atom Dual-Core N550, 1GB DDR3, 250GB HDD, NIC, WiFi, Bluetooth, VGA Intel GMA 3150 256MB (shared), Camera, 10.1  WSVGA, Win7 Starter  with 6-cell battery
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1431076538.jpg','kategori' => 'ASSET'),
		  array('id' => '70','nama_barang' => 'LCD Projector','merk' => 'Infocus/IN124','spesifikasi' => 'Native Aspect Ratio : 4x3
		Technology : DLP
		Resolution: XGA(1024x768)
		Lumens (Eco/High) : 2200/2700
		Contrast : 3000
		3D : Yes Supports PC-based 3D content
		Closed Captioning: Yes
		Speakers : 2W (1 x 2W)
		Audible Noise (Eco/High, dBA) : 33 dB/30 dB
		Keystone : ± 30ºV
		Lamp : SP-LAMP-069
		Lamp Hours (Eco/High) : 5000/6000
		Connections : VGA, S-Video, CompositeC, VGA Monitor Output
		Image Offset	10
		Lens Shift: Horz (min/max)	/
		Lens Shift: Vert (min/max)	/
		Throw Ratio	2.17~1.97
		Weight(lbs/kg)	4.8/2.2
		Product Dimensions HxWxD	9.25in x 11.81in x 2.76in (235mm x 284mm x 70mm)
		Shipping Weight(lbs/kg)	8.7/4.0
		Shipping Dimensions HxWxD	12.99in x 12.99in x 5.9in (330mm x 330mm x 150mm)
		Power consumption (Max, Watts)	260
		Product Warranty	2 Years
		Lamp Warranty	6 Months
		Accessory Warranty	90 Days
		Approvals	UL and c-UL (US/Canada), FCC (US/Canada), CE (Europe)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1432786570.jpg','kategori' => 'ASSET'),
		  array('id' => '71','nama_barang' => 'Boiler drum heat exchanger processs control syst','merk' => 'Sintek/BDT921','spesifikasi' => '','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '72','nama_barang' => 'Avliance Photodetector','merk' => 'Thorlabs/APD110 Series','spesifikasi' => 'Detector material type silicon APD','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '73','nama_barang' => 'Temperatur kontrol','merk' => 'Fuji electric/PXR9TEY1-FV000-A','spesifikasi' => 'Power input 220 VAC
		0 - 1600 °C
		Aplikasi relay output
		Aplikasi analog input 4 – 20 mA, 0 – 5 Volt
		Aplikasi analog output 4 – 20 mA, 0 – 5 Volt
		Aplikasi SSR output
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '74','nama_barang' => 'Camera Dgital','merk' => 'Canon/Eos 50 mark II','spesifikasi' => '21.1 megapixels (5,616 × 3,744 pixels), compared to 12.8 megapixels (4,368 × 2,912 pixels)
		DIGIC 4 image processor, compared to DIGIC II
		100–6400 ISO (expandable to L (50), H1 (12800), H2 (25600)), compared to 100–1600 (expandable to L (50), H (3200))
		3.9 frames per second continuous shooting (78 JPEG or 13 Raw in a single burst), compared to 3 frame/s (60 JPEG or 17 Raw)
		Small Raw modes: sRAW1 mode (10 megapixel/3861 × 2574 pixels), sRAW2 mode (5.2 megapixel/2784 × 1856 pixels)
		98% viewfinder coverage with 0.71× magnification, compared to 96% coverage
		Larger 3.0-inch (76 mm) LCD display with 920,000 pixels, compared to 2.5-inch (64 mm)
		1800mAh LP-E6 battery, compared to 1390mAh BP-511A
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444958416.jpg','kategori' => 'ASSET'),
		  array('id' => '75','nama_barang' => 'Lensa','merk' => 'Canon/EF ','spesifikasi' => '70 - 200mm','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444872217.jpg','kategori' => 'ASSET'),
		  array('id' => '76','nama_barang' => 'Lemari besi (stell cupboard)','merk' => 'Datascrip/ETC23','spesifikasi' => 'Dimension
		920W x 485D x 1840H

		Specification
		2 sliding glass door
		Plastic handle
		3 adustable shelf
		0,7 mm thickness SPCC material.
		Folding Key head to prevent damage
		Plastic indexing labels
		Enamel stoving paint finished, for more scratch resistant.
		Plastic protector equipped to avoid scratch to your floor.
		Strong constructed body','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444960092.jpg','kategori' => 'ASSET'),
		  array('id' => '77','nama_barang' => 'Laptop Core i5','merk' => 'HP/Pavilion 14-V040TX','spesifikasi' => 'Model			: HP Pavilion 14 - V040TX Silver
		Processor		: Intel Core i5-4210U 1.7 GHz 3 MB cache
		Memory			: 4 GB 1600 MHz DDR3L SDRAM (1 x 4 GB)
		Hard Drive		: 750 GB 5400 rpm SATA
		Graphics		: Intel HD Graphics 4400
		Display Type		: 14  diagonal HD BrightView WLED-backlit (1366 x 768)
		Optical Drive		: SuperMulti DVD burner
		Sound			: Beats Audio with 2 speakers
		Slots			: 1 multi-format SD media card reader
		Power			: 65 W AC power adapter 4-cell (41 WHr) Li-ion
		Ports			: 2 USB 3.0 1 HDMI 1 RJ-45 1 headphone/microphone combo
		Network Controller	: Integrated 10/100 BASE-T Ethernet LAN
		Wireless		: 802.11b/g/n (1x1) and Bluetooth 4.0 combo
		Dimensions		: 34.6 x 24.6 x 2.44 cm','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1431072891.peg','kategori' => 'ASSET'),
		  array('id' => '78','nama_barang' => 'Meja Rapat','merk' => 'UNO /UCT 1735','spesifikasi' => 'Dimension
		240 x 120 x 76 Cm

		Specification
		Table rectangular
		Partical Board HPL
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '79','nama_barang' => 'Layar Projektor Automatic ','merk' => 'Brite MR 2121','spesifikasi' => 'Motorized screen with IR remote control 213 x 213 cm

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '80','nama_barang' => 'Kursi Kerja','merk' => 'FUTURA - FTR-045 OSC Kursi Sususn  Nikel Chrome 20 Micrum.','spesifikasi' => 'Jok Biru  Franic oval pipo ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1431654939.exe','kategori' => 'ASSET'),
		  array('id' => '81','nama_barang' => 'LCD Projector','merk' => 'SONY / VPL -EX 276','spesifikasi' => 'XGA (120 x 768) 370 mAnsi Lumen 3LCD Tecnologi  Contras ratio 3000 Audio Out Video in,S-Video, HDMI','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '82','nama_barang' => 'LCD Projector','merk' => 'INFOCUS /IN126A','spesifikasi' => 'Ansi Lumen 3600 WXGA

		Dimensi
		1260x 800, DLP Tecnologi,contras ratio 15000:1 USB mini -8., Wireless conectivity with optimal; USB, adaftor,Audio cut 3.5mm mini jack, Video In 3.5mm mini jack (x2)  S-Video, HDMI 1.4 2GB of internal  Memory.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '83','nama_barang' => 'SCANER A4','merk' => 'CANON Canoscan LIDE 700F','spesifikasi' => 'Flatbed,A4,CIS,4800 dpl(reflektive document), 9600 dpl (Film) mHigh Speed USB .','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '84','nama_barang' => 'Monitor LED','merk' => 'Viewsonic/1080P','spesifikasi' => 'LED ( VA1620A), 15,81386x788,11ms,10.000.000:1 (DCR), 250 cd/mf  LED Widescreen','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1439252617.jpg','kategori' => 'ASSET'),
		  array('id' => '85','nama_barang' => 'Peasawat Telepon','merk' => 'PANASONIC','spesifikasi' => 'Corded Phone,(KX-TS500), Sinfle Line Corded Integrated, Telephon with 6-step  Electronic Handset Volume control and Hearing Aid Conpatibility (HAC)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '86','nama_barang' => 'PC HP Performance','merk' => 'PAVILON ','spesifikasi' => '500-210d DT PC, Intel Core i7-4770 Processor (3.4GHz, Cache 8MB,8GB(2x4GB) DDR3, 1TB HDD.DVD/RW.VGANVIDIA, GeForce GT 640 4GB,GbE NIC, Wifi Wim8 64bit,HP WLED 20Â°  ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '87','nama_barang' => 'PC All-in-One','merk' => 'HP,Envy 23-124ovi','spesifikasi' => 'Spesifikasiminimum,InterCore i5-3470s,Proseser2,8GHz, Cache 8 MB DDR3 1600SODIMM, 1 TB HDD SATA 2700rpm DVD/RW Wifi, Camera23Â°LED/. ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1439253082.jpg','kategori' => 'ASSET'),
		  array('id' => '88','nama_barang' => 'PC-All-In-One','merk' => 'DELL Inspiran One 2350','spesifikasi' => '-Interl Core i7-47000MQ
		-12 GB DDR3
		-1TB HDD+32GBSSD
		-VGA2GB','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '89','nama_barang' => 'Lemari besi','merk' => 'Metal','spesifikasi' => 'Dua pintu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '90','nama_barang' => 'Filling cabinet','merk' => 'Dasa','spesifikasi' => '4 Laci','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '91','nama_barang' => 'Personal colour printer','merk' => 'HP/Docuprint CP105b','spesifikasi' => 'Print Speed		12 ppm monochrome; 10 ppm colour
		First Page Out		24 seconds monochrome; 29 seconds colour
		Memory Standard/Maximum	64MB
		Print Language or PDL (Page Description Language)	Host-based
		Duty Cycle	20,000 pages / month
		Print Resolution (dpi)	1200 x 2400 dpi
		Image Processing	192MHz','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433148173.jpg','kategori' => 'ASSET'),
		  array('id' => '92','nama_barang' => 'Desktop PC Core i7','merk' => 'Dell Optiplex 990 MT','spesifikasi' => 'International Branded. Core i7-2600, 4GB DDR3, 500GB HDD SATA, DVDi+-RW, VGA Intel GMA 4500, Audio, GbE NIC, Win 7 Pro - BUNDLE Monitor 18.5  LCD, Keyboard & mouse USB,Garansi resmi min.1 tahun dari distributor/agen','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433401757.jpg','kategori' => 'ASSET'),
		  array('id' => '93','nama_barang' => 'Serial Interface Modules','merk' => 'OMEGA/D6400','spesifikasi' => 'Programmable Digital Filters: In analog input modules
		Maximum CMV (Input to Output at 115Vrms, 60Hz): 500V rms
		Setups: Stored in EEPROM
		Unused Analog Input Channels: Software disable

		INTERFACE
		Communications: Modbus RTU protocol/RS485 Serial port

		SERIAL COMMUNICATIONS
		Baud Rates: 9600, 19.2K, 38.4K, 57.6K, 115.2K
		Data Format: 8 data bits, and 1 or 2 stop bits
		Parity: Odd, even, none
		Channel Address: User selectable
		Number of Modules: Up to 247 multi-drop modules per host serial port
		Communications Distance: Up to 1219 m (4000Â°) (RS485)
		Transient Suppression: On RS485 data lines

		POWER REQUIREMENTS
		Unregulated 10V to 30 Vdc, protected against power supply reversals

		ENVIRONMENTAL
		Operating Temperature Range: -25 to 70°C (-13 to 158°F)
		Storage: -25 to 85°C (-13 to 185°F)
		Relative Humidity: 0 to 95% non-condensing

		PACKAGE, DIMENSIONS AND CONNECTORS
		Case: ABS thermoplastic, UL-94-5VA rated
		Dimensions: 102 H x 152 W x 38 mm D (4 x 6 x 1.5 );
		mounting holes 165 mm (6.6 ) on center
		Connectors: Screw terminal barrier plug (supplied)

		MODULE SPECIFICATIONS
		D6100 Voltage Inputs
		Number of Channels: 7 differential voltage inputs
		Ranges: ±0.025V, ±0.05V, ±0.1V, ±1V, ±5V, ±10V
		Resolution ADC: 16-bit ADC, 25/20 conversions per second
		Accuracy: ±0.05% of FS maximum
		Span Tempco: ±50ppm/°C maximum
		Input Burnout Protection: To 250 Vac
		Input impedance: 20 M&#937; min
		Power Requirements: Serial = 1.4W

		D6200 CURRENT INPUTS
		Number of Channels: 7 differential current inputs
		Range: ±20 mA
		Resolution ADC: 16-bit ADC, 25/20 conversions per second
		Accuracy: ±0.05% of FS maximum
		Span Tempco: ±50ppm/°C maximum
		Voltage Drop: 2.0V maximum
		Input impedance: <100 &#937; (70 typical)
		Power Requirements: Serial = 1.4W

		D6300 THERMOCOUPLE IPUTS
		Number of Channels: 7 differential thermocouple inputs
		Thermocouple Types: J, K, T, E, R, S, B, and C
		Ranges:
		J = -200 to 760°C (-328 to 1400ºF)
		K = -150 to 1250°C (-238 to 2282ºF)
		T = -200 to 400°C (-328 to 752ºF)
		E = -100 to 1000°C (-148 to 1832ºF)
		R = 0 to 1750°C (32 to 3182ºF)
		S = 0 to 1750°C (32 to 3182ºF)
		B = 0 to 1820°C (32 to 3308ºF)
		C = 0 to 2315°C (32 to 4199ºF)
		Thermocouple Accuracy
		(Error From all Sources) from 0 to 40°C Ambient:
		J, K, T, E = ±1.5°C maximum; R, S, B, C = ±3.5°C maximum; (300°C to +F.S.)
		Resolution ADC: 16-bit ADC, 25/20 conversions per second
		Input Impedance: 20 M&#937; min
		Cold Junction Compensation: Automatic
		Lead Resistance Effect: <40 µV per 350 &#937;
		Indication: Open thermocouple and over range indication
		Input Burnout Protection: To 250 Vac
		Power Requirements: Serial = 1.4W

		D6400 VOLTAGE, THERMOCOUPLE, CURRENT INPUTS
		Number of Channels: 7 differential voltage, thermocouple, current inputs
		Specifications: Equal to D6100, D6200 and D6300 series

		D6500 ANALOG OUTPUTS
		Number of Channels: Two analog outputs (programmable for voltage or currrent output)
		Voltage Range: 0 to 10 Vdc, ±10 Vdc
		Current Ranges: 0 to 20 mA, 4 to 20 mA
		Update Rate: 250 conversions per second
		Accuracy: ±0.1%
		DAC Resolution: 12-bit
		Span Tempco: ±25ppm/°C maximum
		Settling Time to 0.1% FS: 1 mS
		Communications: Watchdog timer
		Current Output Compliance: ±12 Vdc
		Voltage Output Drive: 5 mA maximum
		ADC Analog Output Signal Readback: 8-bit
		Isolation: 500 Vac, output common to system ground
		Current Output Burnout: Protected to 250 Vac
		Power Requirements: Serial = 2.1W

		D6710 DIGITAL INPUTS
		Number of Channels: 15 digital inputs
		Internal: 10K pull-up resistors on each bit accept direct switch closure
		Logic “0”: <1Vdc, Logic “1”: = >3.5Vdc
		Input Burnout: To ±30 Vdc without damage
		Isolation: 500 Vac, input common to system ground
		Power Requirements: Serial = 0.75W

		D6720 DIGITAL OUTPUTS
		Number of Channels: 15 Open-collector outputs to 30 Vdc, 100 mA maximum
		Vsat: +0.3 Vdc maximum at 100 mA
		Short Circuit Protection: To 500 mA
		Communications: Watchdog timer
		Digital Output Update Rate: 4.5 Hz
		Isolation: 500 Vac, output common to system ground
		Power Requirements: Serial = 1.0W ','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433732000.jpg','kategori' => 'ASSET'),
		  array('id' => '94','nama_barang' => 'Serial Comunication Interface','merk' => 'OMEGA/EIT-D-485 ','spesifikasi' => 'SERIAL INTERFACE
		Interface: RS232, or RS485 (2- and 4-wire)
		Connector: DB9 (male DTE) for RS232; 8 position Terminal Block plug for RS485
		Serial Data Rates: 300 to 460,800 Kbps
		Characters: 5,6,7 or 8 data bits
		Parity: Odd, even, or none
		Stop Bits: 1 or 2
		Flow Control: Hardware (RTS/CTS) and Software (Xon/Xoff)
		Digital I/O’s: 1 to 6 programmable input/output lines, depending on model

		NETWORK INTERFACE
		Interface: Fixed or auto-negotiating 10/100BASE-T half/full duplex Ethernet with auto MDI/MDIX
		Connector: RJ45
		Protocols: TCP, UDP, SNMP, SMTP, TFTP, ICMP, DHCP, DNS, HTTP, ARP, MODBUS TCP/IP, and Telnet
		Compliant to Standard: IEEE 802.3
		Indicators (LEDÂ°s): 100BASE-T, Network Link/Activity, and Serial Transmit/Receive
		32-Bit Micorprocessor:
		  CPU: ARM7, 72 MHz
		  Memory: 512 Kbyte Flash, 32 Kbyte SRAM
		Embedded Web Server: Serves dynamic Web pages and Java applets
		Management: Web server, Telnet login, Serial login, iConnect

		GENERAL
		Power (for EIT-PCB):
		  Input: 5 Vdc @ 200 mA max.
		  Consumption: 1 W max.
		Power (for EIT-W):
		  Input: 5 Vdc @ 200 mA max.
		  Consumption: 1.1 W max.
		Safety Qualified Universal ac Power Adapter included:
		  Nominal Output: 5 Vdc @ 600 mA;
		  Input: 100 to 240 Vac, 50/60Hz
		  Operating Temperature:
		  0 to 40°C (32 to 104°F)
		Power (for EIT-D):
		  Input: 10 to 32 Vdc
		  Consumption: 2.5 W max.
		  DC Power supply sold separately: iDRN-PS-1000
		Packaging (for EIT-W):
		  Material: ABS (ChiMei PA-757) with wall mount bracket
		  Dimensions: 27.4H x 66.0W x 93.1D mm
		  (1.08 x 2.60 x 3.67 in)
		  Weight: 77g (0.17 lbs.)
		Packaging (for EIT-D):
		  Material: Polycarbonate case with DIN Rail mount
		  Dimensions: 90.2H x 25.1W x 115.0D mm
		  (3.54 x .99 x 4.53 in)
		  Weight: 113g (0.25 lbs.)
		Packaging (for EIT-PCB):
		  Material: FR4
		  Board Surface area dimensions:
		  approximately 80 sq. mm (3 sq )
		  Weight: 14g (0.03 lbs.)

		ENVIRONMENTAL
		  Operating Temperature EIT-PCB:
		  -40 to 85°C (-40 to 185°F)
		  Operating Temperature EIT-W:
		  -5 to 55°C (23 to 131°F)
		  Operating Temperature EIT-D:
		  -5 to 55°C (23 to 131°F)
		Storage Temperature:
		-40 to 100°C (-40 to 212°F)

		SOFTWARE
		Firmware upgrade from Ethernet;
		COM Port redirector (iPort);
		Configuration Software utility (iConnect),
		compatible with Windows 9x/ME/NT/2000/XP/7 ','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433732306.jpg','kategori' => 'ASSET'),
		  array('id' => '95','nama_barang' => 'Impulse hammer & accessories','merk' => 'Davis Instrument/6510-USB WeatherLink','spesifikasi' => 'PERFORMANCE
		Sensitivity (±20 %)  22.5 mV/N 
		Measurement Range  222 N pk  
		Resonant Frequency  &#8805;100 kHz  
		Non-Linearity   &#8804;1 % 

		ELECTRICAL
		Excitation Voltage  20 to 30 VDC  
		Constant Current Excitation  2 to 20 mA  
		Output Impedance  <100 Ohm  
		Output Bias Voltage  8 to 14 VDC  
		Discharge Time Constant &#8805;100 sec

		PHYSICAL
		Sensing Element  Quartz  
		Sealing    Epoxy  
		Hammer Mass   4.8 gm 
		Head Diameter  6.3 mm  
		Tip Diameter  2.5 mm  
		Hammer Length  107 mm  
		Electrical Connection Position Side  
		Extender Mass Weight  1.25 gm  
		Electrical Connector 5-44 Coaxial','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '96','nama_barang' => 'Digital Oscilloscope','merk' => 'Rigol/DS1052E 50 MH','spesifikasi' => '  DS1052E  |  50 MHz , 2 Analog channels + external trigger
		    1 Million point deep memory
		    1 GSa/sec max sample rate
		    5.7” TFT QVGA (320X240) with 64K color LCD backlit display
		    Trigger modes: edge, pulse width, slope, video, pattern, continuous time, and alternate','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433748956.jpg','kategori' => 'ASSET'),
		  array('id' => '97','nama_barang' => 'Desktop Performa Tinggi','merk' => 'HP/Z420','spesifikasi' => 'System board Form Factor
		ATX 24.384 x 30.48 cm (9.6 x 12 in)
		Processor socket
		Single LGA2011
		CPU bus speed
		QPI: Up to 8.0 GT/s
		Chipset
		Intel C602
		Super I/O controller
		Nuvoton NPCD379H (SIO-12)
		Memory expansion slots
		8 DDR3 memory slots
		Memory type supported
		DDR3, UDIMM (Unbuffered), ECC
		Memory modes
		Channel interleaved
		Memory speed supported
		1066-MHz, 1333-MHz, and 1600-MHz DDR3
		Interfaces supported
		SATA
		Integrated RAID
		Maximum memory
		Supports up to 64GB','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433751386.jpg','kategori' => 'ASSET'),
		  array('id' => '98','nama_barang' => 'UPS','merk' => 'ICA/CT1082B','spesifikasi' => 'pecifications	UPS CT1082B
		Capacity	:	2000 VA / 1000 W
		AC Voltage	:	160 - 250 V
		AC Current	:	4.8 A
		AC Frequency	:	50 ± 3 Hz
		AC Protection	:	10 A
		DC INT Battery	:	3 x 12 V, 7 Ah
		DC Protection Fuse 
		:	50 A
		INV Waveform	:	SYNTHESIZED SINEWAVE (STEP WAVE)
		INV Voltage	:	220 ± 5% V
		INV Frequency	:	50 Hz
		INV Efficiency	:	>80 %
		CHG Type	:	CONSTANT VOLTAGE
		CHG Voltage	:	40.8 V
		CHG Current	:	1.5 A
		Transfer Time	:	< 4 ms
		Back Up Time	:	10 min
		Indicator	:	LED & BUZZER
		Opera Temp	:	0 - 40 °C
		Dimension(DxWxH)	:	430 x 175 x 230 mm
		Weight	:	19.5 Kg','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1433836745.jpg','kategori' => 'ASSET'),
		  array('id' => '99','nama_barang' => 'Camera Digital','merk' => 'Nikon/D40','spesifikasi' => '10MP','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '100','nama_barang' => 'LCD Projector XGA','merk' => 'Hitachi/CP-X3030WN','spesifikasi' => 'Brightness:	3,200 Lumens
		Color Light Output:	3,200 Lumens
		Contrast(Full On/Off):	4,000:1
		Auto Iris:	Yes
		Native Resolution:	1024x768
		Aspect Ratio:	4:3 (XGA)
		 
		Video Modes:	720p, 1080i, 1080p/60
		576i, 480p, 480i
		Data Modes:	MAX 1600x1200
		 
		Digital Inputs:	HDMI
		HDBaseT:	No
		 
		Max Power:	330 Watts
		Voltage:	100V - 240V
		 
		Size(cm) (HxWxD):	9 x 32 x 25
		Weight:	3.1 kg
		 
		** item is not applicable, unpublished, or unknown
		Lamp Life(Full Power):	5,000 hours
		Lamp Life(eco-mode):	6,000 hours
		Lamp Type:	**
		 
		Display Type:	3 LCD
		 
		Standard Zoom Lens:	1.20:1
		Standard Lens Focus:	Manual
		Optional Lenses:	No
		Lens Shift:	No
		 
		Throw Dist (m):  	1.2 - 9.1
		Image Size(cm):	85 - 762
		 
		Audible Noise:	37.0 dB
		Eco-Mode:	29.0 dB
		 
		Speakers:	16.0 W Mono
		Digital Zoom:	**
		Digital Keystone:	Vertical
		 
		Special Features: RS232 Port, USB Port, Closed Captioning, Wired Networking, Crestron RoomView™
		Comments: Cloning Function: Copy configuration settings from one projector to others of the same model via USB memory. Cloning can save almost all PJ settings such as gamma and keystone via USB memory.','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1434701914.JPG','kategori' => 'ASSET'),
		  array('id' => '101','nama_barang' => 'LCD Projector','merk' => 'INFOCUS/IN228','spesifikasi' => 'Native Aspect Ratio	4:3
		Technology	DLP
		Resolution	SVGA(800x600)
		Lumens (Eco/High)	3500/3500
		Contrast	17000
		3D	Yes Supports PC-based 3D content
		Closed Captioning	 
		Speakers	 
		Audible Noise (Eco/High, dBA)	29 dB/32 dB
		Keystone	± 40ºV
		Lamp	 
		Lamp Hours (Eco/High)	5000/6000
		Connections	VGA, Composite Video, S-video
		Image Offset	 
		Lens Shift: Horz (min/max)	/
		Lens Shift: Vert (min/max)	/
		Throw Ratio	2.15~1.95
		Weight(lbs/kg)	5.2/2.4
		Product Dimensions HxWxD	314 x 223 x 88 mm
		Shipping Weight(lbs/kg)	 
		Shipping Dimensions HxWxD	 
		Power consumption (Max, Watts)	 
		Product Warranty	2 Years
		Lamp Warranty	6 Months
		Accessory Warranty	90 Days','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '102','nama_barang' => 'printer','merk' => 'Epson/L355','spesifikasi' => 'Energy Use	11 Watt (standalone copying, ISO/IEC 24712 pattern), 2.3 Watt (sleep mode)
		Supply Voltage	AC 110 V - 240 V,50 Hz - 60 Hz
		Product dimensions	472&#8206; x 300 x 145 mm (Width x Depth x Height)
		Product weight	4.4 kg
		Noise Level	5.2 B (A) with Epson Premium Glossy Photo Paper / Photo RPM mode - 37 dB (A) with Epson Premium Glossy Photo Paper / Photo RPM mode
		Compatible Operating Systems	Mac OS 10.5.8 or later, Mac OS 10.6+, Windows 7, Windows 7 x64, Windows 8 (32/64 bit), Windows Vista, Windows Vista x64, Windows XP, Windows XP x64
		Included Software	Epson Easy Photo Print, Epson Event Manager, Epson Scan, EpsonNet Print
		Interfaces	USB, WiFi
		WLAN Security	WEP 64 Bit, WEP 128 Bit, WPA PSK (TKIP), WPA PSK (AES)
		Mobile and Cloud printing services	Epson Connect (iPrint)
		Power Supply	220V','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1435043125.png','kategori' => 'ASSET'),
		  array('id' => '103','nama_barang' => 'Televisi LED','merk' => 'Smasung/UA40JU6400','spesifikasi' => 'Resolution Height  tooltip-427921	2160px
		Resolution Width  tooltip-427922	3840px
		Hz Refresh Rate  tooltip-426780	100Hz
		HD Type	Ultra HD- 4K
		TV Screen Size	40Inch
		Brand	Samsung
		Finish Colour	Black
		Total Speaker Power	20Watts
		TV Technology	LED
		Height (mm)	535.7mm
		Width (mm)	917.7mm
		Depth (mm)	62.6mm
		Recommended Viewing Distance (cm)  tooltip-426781	300cm
		Intended Use	Movies, Sport & Gaming
		Warranty	1 Year
		Smart Features
		Smart TV	
		Apps	
		Netflix Compatibility	
		Smart Phone App Support  tooltip-426769	
		Upscaling  tooltip-428313	
		Web Browser	
		Additional Dimensions
		Depth with Stand	288.1mm
		Height with Stand	599.2mm
		Width with Stand	917.7mm
		Outputs
		HDMI-CEC  tooltip-426759	
		HDMI-ARC	
		Digital Optical Audio Out	
		Wireless Features
		WiFi Enabled  tooltip-428372	
		Dual Band WiFi	
		NFC  tooltip-426848	
		WiFi Direct	
		Display Mirroring  tooltip-428244	
		TV Features
		DVB-T	
		Caption (Subtitle)	
		EPG  tooltip-426758	
		PVR  tooltip-426765	
		USB File Playback  tooltip-428241	
		Network File Sharing	
		DLNA  tooltip-426772	
		Game Mode	
		2D to 3D Converter  tooltip-426840	
		Built-in Camera	
		Inputs
		HDMI Version	2
		HDMI Ports (IN)	4
		USB Ports	3
		Ethernet  tooltip-426773	
		RF Connection In	
		MHL In	
		Composite In	
		Component In	
		Other Features
		Model Number	UA40JU6400
		Year  tooltip-427430	2015
		Remote Control Included	
		Android App  tooltip-429101	
		iOS App  tooltip-428292	
		Wall Mountable	
		Free Netflix  tooltip-429458	
		New AV promo  tooltip-429469	
		Vendor SKU	UA40JU6400WXXY','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1435715207.peg','kategori' => 'ASSET'),
		  array('id' => '104','nama_barang' => 'Thermal Imager','merk' => 'TROTEC/IC080V','spesifikasi' => 'Thermal Imaging Camera (Trotec IC 080V) Trotec IC 080V. Mengukur temperatur -20 - 600 oC, accuracy -+2% dari measured value, detector Resolution 160x120 pixels, Spectral range 8 - 14 um, Field of View 20?x15?. Thermal sensitivity 0.1 oC pada 30 oC, colour depiction 680x480 pixes. Termasuk integrated photo lamp.  Measurement point sampai 4 moveable measuring point (3x manual and 1x automatic), Isotherm Yes (antara the upper and lower limit values), Emission factor Variably dapat diatur dari 0.01 to 1.0.  Storage medium dengan interchangeable memory card mini - SD card, data format radiometric 14-bit radiometric IR format, Data format visual CCD, Video recording Comment dapat disimpan dengan masing2 IR image (harus termasuk Bluetooth expansion kit dan Bluetooth headset)','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1436146987.jpg','kategori' => 'ASSET'),
		  array('id' => '105','nama_barang' => 'Kamera Digital','merk' => 'NIKON/D3100','spesifikasi' => 'Fitur	Spesifikasi
		Tipe	Nikon D3100
		Ukuran (L x W x H cm)	12.44 x 9.65 x 7.3 cm
		Berat (kg)	0.6
		Warna	Hitam
		Ukuran Layar (in)	3.0
		Megapiksel	14.2
		Fitur	HD Recording|Image Stabilization|Wide Angle
		Garansi produk	1 Tahun Garansi (Spare-part dan Servis)
		Input	USB
		Output	Component Video|Composite Video||USB|HDMI
		Resolusi Layar	230k dots
		Tipe Baterai	Li-Ion
		Format Foto	JPEG & RAW
		Ukuran File Foto	4608 x 3072
		Format Video	MOV
		Video HD	Ya
		Resolusi Video	1920 x 1080
		Focal Length	27 - 83 mm
		Range Aperture Lensa	f/3.5-22
		ISO Range	100-3200
		Range Shutter Speed	1/4000- 1/30 detik
		Built in Flash	Ya
		Tipe Memory Card	SD/SDHC/SDXC
		HDMI Port	Ya
		Tipe Layar	TFT LCD','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '106','nama_barang' => 'Photodetectors','merk' => 'Thorlabs/APD120A','spesifikasi' => 'Thorlabs/APD120A : Wavelength Range 400 - 1000 nm
		Typical Max Responsivity 25 A/W @ 800 nm (M = 50)
		Active Detector Diameter 1 mm
		Transimpedance Gain 100 kV/A, 50 kV/A with 50 &#937; Termination
		Maximum Conversion Gain 2.5 x 106 V/W
		Output Bandwidth (3dB) DC - 50 MHz
		CW Saturation Power 1.5 µW
		Max Input Powera 1 mW
		Minimum NEP (DC - 50 MHz) 0.20 pW/&#8730;Hzc
		Integrated Noise (DC - 50 MHz) 1.5 nW (RMS)
		Electrical Outputs BNC, 50 &#937;
		Max Output Voltage 3.6 V
		DC Offset Electrical Output <±15 mV
		Power Supply ±12 V @ 200 mA
		(110/230 VAC Switchable)
		General
		Operating Temperature Range 0 to 40 °C
		Storage Temperature Range -40 to 70 °C
		Device Dimensions (W x H x D) 2.0  x 2.50  x 1.08 
		(50.8 mm x 63.5 mm x 27.4 mm)
		Weight < 0.1 kg','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1437706610.jpg','kategori' => 'ASSET'),
		  array('id' => '107','nama_barang' => 'Scanner','merk' => 'Canon/CanoScan Lide700F','spesifikasi' => 'GENERAL
		Width 16.1 in
		Depth 11.5 in
		Height 1.8 in
		Weight 4.6 lbs
		Type Flatbed scanner - desktop
		Interface Type USB 2.0
		Max Supported Document Size 8.5 in x 11.7 in
		ManufacturerCanon
		MISCELLANEOUS
		Microsoft Certifications Certified for Windows Vista
		BARCODE
		Scan Element Type Contact Image Sensor (CIS)
		Scan Mode single-pass
		Scan Speed 12 sec / page (color)
		SCANNER
		Input Type color
		Grayscale Depth 16-bit (64K gray levels)
		Grayscale Depth (External) 16-bit (64K gray levels)
		Color Depth 48-bit color
		Color Depth (External) 48-bit color
		Optical Resolution 9600 dpi x 9600 dpi
		Interpolated Resolution 19200 dpi x 19200 dpi
		Lamp / Light Source Type RGB LED array
		Control Panel Buttons Functions Scan-to-Email, Scan-to-PDF, copy
		Scanner Features powered by USB port
		Scan Mode Single-pass
		Scan Element Type Contact Image Sensor (CIS)
		Scan Speed 12 sec / page (color)','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1439251128.jpg','kategori' => 'ASSET'),
		  array('id' => '108','nama_barang' => 'AC','merk' => 'LG/AC inverter jenis ceiling concealed kapasitas 24.000 btu/h','spesifikasi' => '1. Unit AC inverter jenis ceiling concealed kapasitas 24.000 btu/h (1unit). 

		2. Hanger dan drain pan indoor unit (1 set). 

		3. Filter dan housing (1 set). 

		4. Pre-fabricated duct tebal 1  (5 m2). 

		5. Supply Air Grill (1 buah). 

		6. Return Air Grill ( 1 buah). 

		7. Pipa refrigerasi + insulasi (ASTM B280) (15 meter). 

		8. Pipa drain + insulas (15 meter). 

		9. Kabel komunikasi (25 meter). 
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '109','nama_barang' => 'Dispenser','merk' => 'Midea/YL1135AS','spesifikasi' => 'Low Wattage 375 Watt, BOTTOM Gallon Bottle (NEW Concept), Black Door, Large of Hot & Cooling Capacity','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '110','nama_barang' => 'PureIt','merk' => 'Uniliver','spesifikasi' => 'Pureit  Kapasitas wadah atas 9 liter dan wadah transparan 9 liter.','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1444098927.jpg','kategori' => 'ASSET'),
		  array('id' => '111','nama_barang' => 'Component Kit','merk' => 'BMS123','spesifikasi' => 'BMS123 Controller Suplay, Voltage 8-30 Volt DC','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '112','nama_barang' => 'Sound Level Meter','merk' => 'RION/NA-28WR','spesifikasi' => '*4 recording functions – Total, Manual, Event and Periodic;
		*Total Recording – audio recording throughout the entire measurement period;
		*Manual – start and stop audio recording during a measurement using a single button press on the instrument keypad;
		*Event - records audio above a user-defined trigger level in any octave or third octave band or all-pass level in the main or sub-channel;
		*Periodic - Records periodic audio snapshots (1 minute or 15 seconds) every 10 or 60 minutes for source identification during unattended surveys;
		*Periodic and triggered audio functions can be operated simultaneously;
		*Manual recording also when used with NRH-1 Handset (part of the ANV Measurement Systems/Rion Nuisance Analyser);
		*NX-28WR audio recordings are calibrated wav files recorded straight onto compact flash for immediate plug and play convenience;
		*NX-28WR audio recordings can be played back with almost any standard media player (no specialist software required);
		*NX-28WR audio recordings can be used for post-processing with wav file analysis software (such as Prosig DATs Lite or Rion DA-20PA1);
		*Clear indication on the meter display when audio recording is enabled and when audio recording is in progress;
		*Can be used with Rion NA-28PA1 software which displays audio file icons below a level vs. time graph;
		*Can be used simultaneously with NX-28BA Building Acoustics option.','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1444287257.jpg','kategori' => 'ASSET'),
		  array('id' => '113','nama_barang' => 'Hybridge Controller','merk' => 'SMA/Sunny Island 5048','spesifikasi' => 'Paket Hybrid Controller 5000Watt 48VDC, 220VAC, 50Hz + Accessories Merk : SMA ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '114','nama_barang' => 'Modul for Interacting Learning for Circuit','merk' => 'National Instrument/NI Elvis II','spesifikasi' => 'Integrated suite of 12 instruments
		100 MS/s oscilloscope option (NI ELVIS II+)
		Includes Basic Breadboard for Circuits and Electronics
		Complete integration with NI Multisim for teaching circuits concepts
		Extend your lab with companion products from Quanser, Freescale, Emona, and more
		See Resources tab for free courseware','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444697206.jpg','kategori' => 'ASSET'),
		  array('id' => '115','nama_barang' => 'Impedance Tube System','merk' => 'BSWA/SW422+SW477','spesifikasi' => 'Specifications
		BSWA IMPEDANCE TUBES
		Model	SW230	SW260	SW420	SW470	SW422	SW477
		Value to be Measured	Sound Absorption Coefficient (&#945;)	Sound Absorption Coefficient (&#945;)
		and Transmission Loss(TL)
		Standard	GB/T-18696, 2-2002, ISO10534-2, 1998, ASTM E1050-08	Sound Absorption Standard:
		GB/T-18696, 2-2002, ISO10534-2,
		1998; ASTM E1050-08
		Frequency Range (Hz)	125 ~ 3150	125 ~ 6300	63 ~ 1800	800 ~ 6300	63 ~ 1800	800 ~ 6300
		Inner Diameter of
		Testing Tube	60 mm	60 & 30 mm	100 mm	30 mm	100 mm	30 mm
		Loud speaker	4 “ in diameter, 20 Watts, 8 Ohm
		OPTIONAL ITEMS
		1/4’’ Microphone	MPA416
		Data Acquisition Card	MC3022+PA50 or MC3522	MC3242
		Power Amplifier	PA50
		Software	VA-Lab2 Basic + VA-Lab2 IMP-A	VA-Lab4 Basic + VA-Lab4 IMP-AT','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444697590.jpg','kategori' => 'ASSET'),
		  array('id' => '116','nama_barang' => 'Water Proof Temperatur Hi Tester','merk' => 'Hioki/3442','spesifikasi' => '3442
		Sensor	K type thermocouple, (Chromel / Almel)
		Measurement range	-100 °C to 1300 °C
		The actual measurement range is restricted by the temperature probe
		(0.1 °C Resolution/ -100 °C to 199.9 °C, 1°C Resolution/ 200 °C to 1300 °C)
		Unit accuracy	±0.1 % rdg. ±0.8 °C (-100 °C to 199.9 °C)
		±0.2 % rdg. ± 1 °C (200 °C to 1300 °C)
		*Accuracy of temperature sensor is added
		Water-resistant construction	N/A	IP 54 (EN 60529: 1991)
		Sampling rate	2 times/s
		Contact compensation	Auto compensation
		Functions	Max/Min data recording and display, display data hold, sensor broken down display, auto power save, low battery warning
		Power supply	R6P (AA) manganese battery ×4, or LR6 (AA) alkaline battery ×4, Continuous use : 200 hr or better (with manganese battery), 
		Max. rated consumption : 35 mVA
		Dimensions and mass	74 mm (2.91 in) W × 155 mm (6.10 in) H × 24 mm (0.94 in) D, 160 g (5.6 oz)
		Accessories	R6P (AA) manganese battery ×4, Strap band ×1, Instruction manual ×1','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444697921.jpg','kategori' => 'ASSET'),
		  array('id' => '117','nama_barang' => 'Inverter Pembangkit Listrik Tenaga Surya','merk' => 'SMA/Sunny By 2000HF-30','spesifikasi' => 'Technical data Sunny Boy 2000HF-US Sunny Boy 2500HF-US Sunny Boy 3000HF-US
		208 V AC 240 V AC 208 V AC 240 V AC 208 V AC 240 V AC
		Input (DC)
		Max. recommended PV power (@ module STC) 2500 W 3125 W 3750 W
		Max. DC power (@ cos &#981; = 1) 2200 W 2750 W 3300 W
		Max. DC voltage 600 V 600 V 600 V
		DC nominal voltage 480 V 480 V 480 V
		MPP voltage range 175 – 480 V 220 – 480 V 220 – 480 V
		Min. DC voltage / start voltage 175 V / 220 V 220 V / 220 V 220 V / 220 V
		Max. input current / per string 15 A / 15 A 15 A / 15 A 15 A / 15 A
		Number of MPP trackers / fused strings per MPP tracker 1/ 2 standard, extendable to 3
		Output (AC)
		AC nominal power 2000 W 2500 W 3000 W
		Max. AC apparent power 2000 VA 2500 VA 3000 VA
		Nominal AC voltage / adjustable 208 V / &#9679; 240 V / &#9679; 208 V / &#9679; 240 V / &#9679; 208 V / &#9679; 240 V / &#9679;
		AC voltage range 183 – 229 V 211 – 264 V 183 – 229 V 211 – 264 V 183 – 229 V 211 – 264 V
		AC grid frequency; range 60 Hz; 59.3 – 60.5 Hz 60 Hz; 59.3 – 60.5 Hz 60 Hz; 59.3 – 60.5 Hz
		Max. output current 9.6 A 8.3 A 12.0 A 10.4 A 14.4 A 12.5 A
		Power factor (cos &#981;) 1 1 1
		Phase conductors / connection phases 1 / 2 1 / 2 1 / 2
		Harmonics < 4% < 4% < 4%
		Efficiency
		Max. efficiency 97.3% 96.9% 96.6%
		CEC efficiency 97.0% 96.5% 96.5%
		Protection devices
		DC reverse-polarity protection &#9679; &#9679; &#9679;
		AC short circuit protection &#9679; &#9679; &#9679;
		Galvanically isolated / all-pole sensitive monitoring unit &#9679;/— &#9679;/— &#9679;/—
		Protection class / overvoltage category I / III I / III I / III
		General data
		Dimensions (W / H / D) in mm (in) 348 / 727 / 183 (14 / 29 / 7) incl. DC Disconnect
		DC disconnect dimensions (W / H / D) in mm (in) —
		Packing dimensions (W / H / D) in mm (in) 450 / 600 / 400 (18 / 24 / 16) incl. DC Disconnect
		DC disconnect packing dimensions (W / H / D) in mm (in) —
		Weight / DC disconnect weight approx. 23 kg (51 lb) incl. DC Disconnect
		Packing weight / DC disconnect packing weight 25 kg / 55 lb
		Operating temperature range (full power) –25 °C ... +45 °C (–13 °F ... +113 °F)
		Noise emission (typical) www.SMA-Solar.com www.SMA-Solar.com www.SMA-Solar.com
		Internal consumption at night <1 W <1 W <1 W
		Topology HF transformer HF transformer HF transformer
		Cooling concept OptiCool OptiCool OptiCool
		Electronics protection rating / connection area NEMA 3R / NEMA 3R NEMA 3R / NEMA 3R NEMA 3R / NEMA 3R
		Features
		Display: text line / graphic —/&#9679; —/&#9679; —/&#9679;
		Interfaces: RS485 / Bluetooth &#9675;/&#9679; &#9675;/&#9679; &#9675;/&#9679;
		Warranty: 10 / 15 / 20 years &#9679;/&#9675;/&#9675; &#9679;/&#9675;/&#9675; &#9679;/&#9675;/&#9675;
		Certificates and permits (more available on request) UL1741, UL1998, IEEE 1547, FCC Part 15 (Class A & B), CSA C22.2 No. 107.1-01
		Data at nominal conditions
		&#9679; Standard features &#9675; Optional features — Not available
		Type designation SB 2000HFUS-30 SB 2500HFUS-30 SB 3000HFUS-30','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444698526.jpg','kategori' => 'ASSET'),
		  array('id' => '118','nama_barang' => 'Modul RF Comunication','merk' => 'NI/Emona Datex ET202','spesifikasi' => 'Design prototiping and test circuit for RF comunication based on NI Elvis','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444698969.jpg','kategori' => 'ASSET'),
		  array('id' => '119','nama_barang' => 'Vibration Sensor Suite','merk' => 'NI/Vibration Sensor Suite','spesifikasi' => 'Sensitivity','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '120','nama_barang' => 'Data Acquisition Logger','merk' => 'NI/USB 6259BNC','spesifikasi' => 'National Instruments recommends using the NI USB-6363 for all new applications.
		16 differential BNC analog inputs (16-bit); 1.25 MS/s single-channel (1 MS/s aggregate)
		4 BNC analog outputs (16-bit, 2.8 MS/s); 48 digital I/O (32 clocked, 8 BNC); two 32-bit counters
		NI Signal Streaming for sustained high-speed data streams over USB; OEM version available
		Compatible with LabVIEW, ANSI C/C++, C#, Visual Basic .NET, and Visual Basic 6.0
		NI-DAQmx driver software and NI SignalExpress LE interactive data-logging software','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444870532.jpg','kategori' => 'ASSET'),
		  array('id' => '121','nama_barang' => 'Gasifier Control Unit','merk' => 'GEK/PCU','spesifikasi' => 'Proccessor : Atmel ATMega 1280
		Sensor temperatur : 16 port termokopel Ktype
		Input sensor tekanan : 4 port (High Range, +/- 28mH2O)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '122','nama_barang' => 'Alat Pengukuran Potensi Energi Surya dan Angin','merk' => 'Davis/Vantage Pro 2 Puls','spesifikasi' => 'Electronic components are housed in a weather-resistant shelter.
		Console may be powered using the included power adapter or with three C batteries (not included).
		Wireless range is up to 1,000 ft (300 m) outdoors, line of sight. Typical range through walls under most conditions is 200 to 400 ft (60 to 120 m).
		Add wireless repeaters for distances up to 1.7 miles (2.7 km).','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444873924.jpg','kategori' => 'ASSET'),
		  array('id' => '123','nama_barang' => 'Differensial Pressure Transmiter','merk' => 'Yokogawa/EJA110A-EMS4B-92D','spesifikasi' => 'MODEL AND SUFFIX CODES:
		Model
		Optional codes
		Description
		EJA110A
		· · · · · · · · · ·
		Differential pressure transmitter
		Output Signal
		-D · · · · · · ·
		-E · · · · · · · ·
		 
		-F · · · · · · · ·
		 
		-G · · · · · · ·
		4 to 20 mA DC with digital communication (BRAIN protocol)
		4 to 20 mA DC with digital communication (HART protocol, refer to GS 01C22T01-00E)
		Digital communication (FOUNDATION Fieldbus protocol, refer to GS 01C22T02-00E)
		Digital communication (PROFIBUS PA protocol, refer to GS 01C22T03-00E)
		Measurement
		span(capsule)
		L · · · · · · · ·
		M · · · · · · · ·
		H · · · · · · · ·
		V · · · · · · · ·
		0.5 to 10 kPa {50 to 1000 mmH2O} {2 to 40 inH2O} {5 to 100 mbar}
		1 to 100 kPa {100 to 10000 mmH2O} {4 to 400 inH2O} {10 to 1000 mbar}
		5 to 500 kPa { 0.05 to 5 kgf/cm2} {20 to 2000 inH2O} {50 to 5000 mbar}
		0.14 to 14 MPa { 1.4 to 140 kgf/cm2}*1 {20 to 2000 psi} {1.4 to 140 bar}
		Wetted
		parts material*11
		 
		S# · · · · · · ·
		H# · · · · · · ·
		M# · · ·· · · ·
		T · · · · · · · ·
		A#· · · · · · · ·
		D · · · · · · · ·
		B# · · · · · · ·
		[Body]ˆ² [Capsule] [Vent plug]
		SCS14A SUS316Lˆ5 SUS316ˆ13
		SCS14A Hastelloy C-276ˆ6ˆ12 SUS316 ˆ13
		SCS14A Monelˆ6 SUS316 ˆ13
		SCS14A Tantalum ˆ6 SUS316 ˆ13
		Hastelloy C-276 equivalentˆ³ Hastelloy C-276 ˆ6ˆ 12 Hastelloy C-276 ˆ12
		Hastelloy C-276 equivalent ˆ³ Tantalum ˆ³ Hastelloy C-276 ˆ12
		Monel equivalent ˆ4 Monel ˆ6 Monel
		Process
		connections
		0 · · · · · · · ·
		1 · · · · · · · ·
		2 · · · · · · · ·
		3 · · · · · · · ·
		4 · · · · · · · ·
		5 · · · · · · · ·
		without process connector (Rc1/4 female on the cover flanges)
		with Rc1/4 female process connector
		with Rc1/2 female process connector
		with 1/4 NPT female process connector
		with 1/2 NPT female process connector
		without process connector (1/4 NPT female on the cover flanges)
		Bolts and
		nuts material
		 
		A · · · · · · · ·
		B · · · · · · · ·
		C · · · · · · · ·
		[Maximum working pressure]
		SCM435 16 MPa {160 kgf/cm2}*9
		SUS630 16 MPa {160 kgf/cm2}*9
		SUH660 16 MPa {160 kgf/cm2}*9
		Installation
		-2 · · · · · · · ·
		-3 · · · · · · · ·
		-6 · · · · · · · ·
		-7 · · · · · · · ·
		-8 · · · · · · · ·
		-9 · · · · · · · ·
		Vertical impulse piping type, right side high pressure, process connector upside*7
		Vertical impulse piping type, right side high pressure, process connector downside*7
		Vertical impulse piping type, left side high pressure, process connector upside*7
		Vertical impulse piping type, left side high pressure, process connector downside*7
		Horizontal impulse piping type, right side high pressure*8
		Horizontal impulse piping type, left side high pressure*8
		Electrical
		connection
		0 · · · · · · · ·
		2 · · · · · · · ·
		3 · · · · · · · ·
		4 · · · · · · · ·
		5 · · · · · · · ·
		7 · · · · · · · ·
		8 · · · · · · · ·
		9 · · · · · · · ·
		A · · · · · · · ·
		C · · · · · · · ·
		D · · · · · · · ·
		G1/2 female, one electrical connection
		1/2 NPT female, two electrical connections without blind plug
		Pg 13.5 female, two electrical connections without blind plug
		M20 female, two electrical connections without blind plug
		G1/2 female, two electrical connections and a blind plug
		1/2 NPT female, two electrical connections and a blind plug
		Pg 13.5 female, two electrical connections and a blind plug
		M20 female, two electrical connections and a blind plug
		G1/2 female, two electrical connections and a SUS316 blind plug
		1/2 NPT female, two electrical connections and a SUS316 blind plug
		M20 female, two electrical connections and a SUS316 blind plug
		Integral
		indicator
		D · · · · · · · ·
		E · · · · · · · ·
		N · · · · · · · ·
		Digital indicator
		Digital indicator with the range setting switch*10
		(None)
		Mounting
		bracket
		A · · · · · · · ·
		B · · · · · · · ·
		J · · · · · · · ·
		C · · · · · · · ·
		D · · · · · · · ·
		K · · · · · · · ·
		N · · · · · · · ·
		SECC Carbon steel 2-inch pipe mounting (flat type)
		SUS304 2-inch pipe mounting (flat type)
		SUS316 2-inch pipe mounting (flat type)
		SECC Carbon steel 2-inch pipe mounting (L type)
		SUS304 2-inch pipe mounting (L type)
		SUS316 2-inch pipe mounting (L type)
		(None)
		Optional codes
		 	
		/&#9674; Optional specification','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444955968.jpg','kategori' => 'ASSET'),
		  array('id' => '124','nama_barang' => 'Wireless Acces Point','merk' => 'TP-LINK/TL-WA5110G','spesifikasi' => 'Interface	One 10/100M Ethernet Port(RJ45)
		Support Passive PoE
		Button	Reset Button
		External Power Supply	12VDC/ 1A
		Wireless Standards	IEEE 802.11g, IEEE 802.11b
		Dimensions ( W x D x H )	6.5×4.2×1.1 in. (165×108×28mm)
		Antenna Type	4dBi Detachable Omni Directional (RP-SMA)
		WIRELESS FEATURES
		Frequency	2.4-2.4835GHz
		Signal Rate	11g: Up to 54Mbps(dynamic)
		11b: Up to 11Mbps(dynamic)
		Reception Sensitivity	54M: -68dBm@10% PER
		11M: -85dBm@8% PER
		6M: -88dBm@10% PER
		1M: -90dBm@8% PER
		Transmit Power	<20dBm (EIRP, For countries using CE Standards)
		<27dBm (EIRP, For countries using FCC Standards)
		Wireless Modes	AP Router Mode
		AP Client Router Mode (WISP Clent)
		AP/Client/WDS Bridge/Repeater mode
		Wireless Functions	Enable/Disable Wireless Radio, WDS Bridge,
		Wireless Security	SSID Enable/Disable
		MAC Address Filter
		64/128/152-bit WEP Encryption
		WPA/WPA2/WPA-PSK/WPA2-PSK (AES/TKIP) Encryption
		DHCP	DHCP Server
		Quality of Service	WMM
		Management	SNMP
		OTHERS
		Certification	CE, FCC, RoHS
		Package Contents	Wireless Access Point TL-WA5110G
		1 Detachable Omni directional antennas
		Power supply unit
		PoE Power Injector
		Resource CD
		Quick Installation Guide
		System Requirements	Microsoft Windows 98SE, NT, 2000, XP, Vista™ or Windows 7, MAC OS, NetWare, UNIX or Linux.
		Environment	Operating Temperature: 0&#8451;~40&#8451; (32&#8457;~104&#8457;)
		Storage Temperature: -40&#8451;~70&#8451; (-40&#8457;~158&#8457;)
		Operating Humidity: 10%~90% non-condensing
		Storage Humidity: 5%~90% non-condensing','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444956364.jpg','kategori' => 'ASSET'),
		  array('id' => '125','nama_barang' => 'Power Meter 3 Fasa','merk' => 'Hioki/3169-20','spesifikasi' => 'Measurement line & number of circuits	Single-phase 2-wires (4 circuits), Single-phase 3-wires (2 circuits), Three-phases 3-wires (2 or 1 circuit), and Three-phases 4-wires (1 circuit)
		Note: 50 or 60 Hz, and that share the same voltage line
		Measurement items	Voltage, Current, Active/ reactive/ apparent power, Active/ reactive power integration, Power factor, Frequency, Harmonic waveform value (up to 40th order)
		Measurement range	[Voltage] 150.00 V to 600.00 V AC, 3 ranges, [Current] 500.00 mA to 5.0000 kA AC (depends on current sensor in use), [Power] 75.000 W to 900.00 kW (depends on combination of voltage, current range, and measurement line)
		Basic accuracy	AC Voltage: ±0.2 % rdg. ±0.1 % f.s.
		AC Current: ±0.2 % rdg. ±0.1 % f.s. + current sensor accuracy
		Active power: ±0.2 % rdg. ±0.1 % f.s. + current sensor accuracy (at power factor = 1)
		Clamp on sensor 9661: ±0.3 % rdg. ±0.01 % f.s. (different from each sensor models)
		Measurement method	Digital sampling, PLL synchronization or 50/60 Hz fixed clock
		Display refresh rate	2 times /sec (except when a PC card accessing, or RS-232C communications)
		Data save interval	Standard interval: 1 sec to 30 sec, 1 minute to 60 minutes, 13 selects
		Fast interval: A single waveform, or 0.1, 0.2, or 0.5 sec (at instant value only)
		Frequency characteristics	Fundamental waveforms up to the 50th order ±3% f.s. + measurement accuracy (of a 45 to 66 Hz fundamental waveform)
		Other functions	Error connect check, language selection, display hold, setting backup, power shut off management, key lock, [3169-21 only] D/A output 4 channels, (±5 V DC f.s.)
		Power supply	100 to 240 V AC, 50/60 Hz, 30 VA max.
		Dimensions and mass	210 mm (8.27 in)W × 160 mm (6.30 in)H × 60 mm (2.36 in)D, 1.2 kg (42.3 oz)
		Accessories	Voltage cord L9438-53 ×1 (Black/ Red/ Yellow/ Blue, 3 m (9.84 ft) length, Alligator clip ×4), Power cord ×1, Instruction manual ×1, Quick start manual ×1, CD-R ×1 (RS-232C interface operating manual) ×1, Input cord label ×1, Connection cable 9441 ×1 (for the 3169-21 only)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444957477.jpg','kategori' => 'ASSET'),
		  array('id' => '126','nama_barang' => 'Lensa','merk' => 'Canon EF 85mm','spesifikasi' => 'Lensa Telephoto Prime, Autofocus cepat dengan USM, Ukuran Filter 58mm, Canon EF Mount Full Frame dan APS-C','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444958021.jpg','kategori' => 'ASSET'),
		  array('id' => '127','nama_barang' => 'Diffuselite Illuminator','merk' => 'Edmund Optics/DL-106-WHIIC','spesifikasi' => '3.35  High Brightness LED Diffuselite, White','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444958791.JPG','kategori' => 'ASSET'),
		  array('id' => '128','nama_barang' => 'Desktop PC','merk' => 'Acer Predator/AG3610','spesifikasi' => 'Intel Core i5 2300 (2.80 GHz)
		6 GB DDR3 1 TB HDD
		Windows 7 Home Premium 64-bit
		NVIDIA GeForce GT 520 1GB','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444960443.jpg','kategori' => 'ASSET'),
		  array('id' => '129','nama_barang' => 'Ultrasonic Transducer','merk' => 'SONATEST/IM 1050','spesifikasi' => 'Ferq 5MHz','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444963555.jpg','kategori' => 'ASSET'),
		  array('id' => '130','nama_barang' => 'Ultrasonic Transducer','merk' => 'SONATEST/IM5010','spesifikasi' => 'Freq 10 MHz','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444963698.jpg','kategori' => 'ASSET'),
		  array('id' => '131','nama_barang' => 'Ultrasonic Transducer','merk' => 'SONATEST/IM 7550','spesifikasi' => 'Freq 5MHz','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444963799.jpg','kategori' => 'ASSET'),
		  array('id' => '132','nama_barang' => 'Ultrasonic Transducer','merk' => 'SONATEST/IM3750','spesifikasi' => 'Freq 5MHz','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444963892.jpg','kategori' => 'ASSET'),
		  array('id' => '133','nama_barang' => 'Ultrasonic Transducer','merk' => 'SONATEST/IM2550','spesifikasi' => 'Freq 5MHz','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444963965.jpg','kategori' => 'ASSET'),
		  array('id' => '134','nama_barang' => 'Magnetic Stirrer','merk' => 'ROTH/N551.1','spesifikasi' => 'RO 10 Power','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '135','nama_barang' => 'Microwave Open','merk' => 'Sharp/R-369','spesifikasi' => 'Power ful output power (1100 Watt), for quick end eficient cooking, 32 liter capacity','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444965610.jpg','kategori' => 'ASSET'),
		  array('id' => '136','nama_barang' => 'Compact CCD Spectrometer','merk' => 'ccd','spesifikasi' => 'Wave langht range 350-700 nm','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '137','nama_barang' => 'Temperatur Meter','merk' => 'Hanna/H991001','spesifikasi' => 'pH = 0-14','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444966173.jpg','kategori' => 'ASSET'),
		  array('id' => '138','nama_barang' => 'Balances ','merk' => 'Lab Scales','spesifikasi' => '0,001 gl, max 60gr','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '139','nama_barang' => 'Balances','merk' => 'Laboratory Balances','spesifikasi' => 'Lab Scales  res 0,001 gl
		Max 60gr','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '140','nama_barang' => 'Earth Ground Tester','merk' => 'Fluke/1623 Basic Geo','spesifikasi' => 'Detailed Specifications
		General
		Display:1999 digit LCD	Display with special symbols, digit height 25 mm, fluorescent backlight
		User interface	Instant measurement through TURN and START one button concept. The only operating elements are rotary switch and START button
		Robust, water and dust resistant	Instrument is designed for tough environmental conditions (rubber protective cover, IP56)
		Memory	Internal memory storage up to 1500 records accessible via USB port
		Temperature Range
		Operating temperature	-10 °C to 50 °C (14 °F to 122 °F)
		Storage temperature	-30 °C to 60 °C (-22 °F to 140 °F)
		Temperature coefficient	± 0.1 % of reading/°C <18 °C >28 °C
		Intrinsic error	Refers to the reference temperature range and is guaranteed for 1 year
		Operating error	Refers to the operating temperature range and is guaranteed for 1 year
		Climatic class	C1 (IEC 654-1), -5 °C to +45 °C (23° to +115° F), 5 % to 95 % RH
		Protective type	IP56 for case, IP40 for battery door according to EN60529
		Safety	Protection by double and/or reinforced insulation. max. 50 V to earth. IEC61010-1: 300V CAT II, Pollution degree 2
		EMC (emission immunity)	IEC61326-1: Portable
		Quality system	Developed, designed and manufactured according to DIN ISO 9001
		External voltage	V ext, max = 24 V (dc, ac < 400 Hz), measurement inhibited for higher values
		V ext rejection	> 120 dB (162&#8260;3, 50, 60, 400 Hz)
		Measuring time	Typical 6 seconds
		Max. overload	250 V rms (pertains to misuse)
		Auxiliary power	6 x 1.5 V Alkaline (type AA LR6)
		Battery life span	Typical > 3,000 measurements
		Dimensions (WxHxD)	250 mm x 133 mm x 187 mm (9.75 in x 5.25 in x 7.35 in)
		Weight	1.1 kg (2.43 lb) including batteries 
		7.6 kg (16.8 lb) incl. accessories and batteries in carrying case
		RA 3-Pole Ground Resistance Measurement (IEC 1557-5)
		Switch position	RA 3-pole
		Resolution	0.001 &#937; to 10 &#937;
		Measuring range	0.020 &#937; to 19.99 k&#937;
		Accuracy	± (2 % rdg + 3 d)
		Operating error	± (5 % rdg + 3 d)
		Measuring Principle: Current and Voltage Measurement
		Measuring voltage	Vm = 48 V ac
		Short-circuit current	> 50 mA
		Measure frequency	128 Hz
		Probe resistance (RS)	Max 100 k&#937;
		Auxiliary earth electrode resistance (RH)	Max 100 k&#937;
		Additional error from RH and RS	RH[k&#937;]•••RS[k&#937;]/RA[&#937;]•••0.2 %
		Monitoring of RS and RH with error indicator.
		Automatic range selection.
		Measurement is not performed if the current through the current clamp is too low.
		RA 4-Pole Ground Resistance Measurement (IEC 1557-5)
		Switch position	RA 4-pole
		Resolution	0.001 &#937; to 10 &#937;
		Measuring range	0.020 &#937; to 19.99 k&#937;
		Accuracy	± (2 % rdg + 3 d)
		Operating error	± (5 % rdg + 3 d)
		Measuring Principle: Current and voltage Measurement
		Measuring voltage	Vm = 48 V ac
		Short-circuit current	> 50 mA
		Measure frequency	128 Hz
		Probe resistance (RS + RES)	Max 100 k&#937;
		Auxiliary earth electrode resistance (RH)	Max 100 k&#937;
		Additional error from RH and RS	RH[k&#937;]•••RS[k&#937;]/RA[&#937;]•••0.2 %
		Monitoring of RS and RH with error indicator.
		Automatic range selection.
		RA 3-Pole Selective Ground Resistance Measurement with Current Clamp (RA with Clamp )
		Switch position	RA 3-pole with clamp
		Resolution	0.001 &#937; to 10 &#937;
		Measuring range	0.020 &#937; to 19.99 k&#937;
		Accuracy	± (7 % rdg + 3 d)
		Operating error	± (10 % rdg + 5 d)
		Measuring Principle: Current/Voltage Measurement (with External Current Clamp)
		Measuring voltage	Vm = 48 V ac
		Short-circuit current	> 50 mA
		Measure frequency	128 Hz
		Probe resistance (RS)	Max 100 k&#937;
		Auxiliary earth electrode resistance (RH)	Max 100 k&#937;
		Monitoring of RS and RH with error indicator.
		Automatic range selection.
		Measurement is not performed if the current through the current clamp is too low.
		RA 4-Pole Selective Ground Resistance Measurement with Current Clamp (RA with Clamp )
		Switch position	RA 4-pole with clamp
		Resolution	0.001 &#937; to 10 &#937;
		Measuring range	0.020 &#937; to 19.99 k&#937;
		Accuracy	± (7 % rdg + 3 d)
		Operating error	± (10 % rdg + 5 d)
		Measuring Principle: Current/Voltage Measurement (with External Current Clamp)
		Measuring voltage	Vm = 48 V ac
		Short-circuit current	> 50 mA
		Measure frequency	128 Hz
		Probe resistance (RS)	Max 100 k&#937;
		Auxiliary earth electrode resistance (RH)	Max 100 k&#937;
		Monitoring of RS and RH with error indicator.
		Automatic range selection.
		Measurement is not performed if the current through the current clamp is too low.
		Stakeless Ground Loop Measurement (2 Clamps )
		Switch position	RA 4-pole 2 clamps
		Resolution	0.001 &#937; to 10 &#937;
		Measuring range	0.020 &#937; to 19.99 k&#937;
		Accuracy	± (7 % rdg + 3 d)
		Operating error	± (10 % rdg + 5 d)
		Measuring Principle: Stakeless Measurement of Resistance in Closed Loops Using Two Current Transformers
		Measuring voltage	Vm = 48 V ac
		Measure frequency	128 Hz
		Noise current (IEXT)	Max. IEXT = 10 A (ac) (RA < 20 &#937;)
		Max. IEXT = 2 A (ac) (RA > 20 &#937;)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1444975281.jpg','kategori' => 'ASSET'),
		  array('id' => '141','nama_barang' => 'Fuel Cell Stack','merk' => 'NedStack/PG5 0-24 polymer ectrolyte','spesifikasi' => 'Power 5000 Watt
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '142','nama_barang' => 'Mouth Simulator','merk' => 'BSWA/AM012','spesifikasi' => 'Standards : IEEE 269,661; ITU-T P.51
		Output SPL : 94 dB (200-8000Hz),110 dB (200-2000Hz)
		Opening Size : 20mm in diameter
		Source : 8&#937;/20W
		Dia.of lip ring : 40mm
		Height of lip ring : 10mm
		Size : Diameter:100mm; Height:98mm

		Weight : 1,1Kg
		','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1444976830.jpg','kategori' => 'ASSET'),
		  array('id' => '143','nama_barang' => 'PC Desktop core 2 quad','merk' => 'Rakitan','spesifikasi' => 'Processor intel core 2 quad q 8400','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '144','nama_barang' => 'LCD Monitor','merk' => 'DELL','spesifikasi' => 'LCD Monitor 22  resolusi minimal 1680x1050, VGA/HDMI input
		thin bezel','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '145','nama_barang' => 'Panel Powerwall','merk' => 'Rakitan','spesifikasi' => 'Bahan kayu dn Stenless','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '146','nama_barang' => 'Hygrometer','merk' => 'Extech/37804-15','spesifikasi' => 'Digital Thermo Hygrometer Heat Stress','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '147','nama_barang' => 'vacum Manometer','merk' => 'Yokogawa/75555','spesifikasi' => 'High accuracy:
		±0.01%, with a maximum allowable input of 500 kPa (130 kPa-range model)
		A wide range of pressures:
		Offering low differential pressure of 1 kPa to a high gauge pressure of 3000 kPa
		Three measurement modes:
		Normal speed, medium speed, and high speed (MT210F series)
		Options:
		D/A conversion output, comparator output, and external trigger input (optional)
		GP-IB and RS-232 interfaces, l12-V DC power supply, lBattery operation (optional)','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '148','nama_barang' => 'Pneumatic Presure standard','merk' => 'Yokogawa','spesifikasi' => '????','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '149','nama_barang' => 'Pacum Pump','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '150','nama_barang' => 'Standard Resistance','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '151','nama_barang' => 'Panel Kontrol-1','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '152','nama_barang' => 'Panel KOntrol-2','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '153','nama_barang' => 'DC Voltage Current','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '154','nama_barang' => 'Thermometer','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '155','nama_barang' => 'Panel Kontrol-3','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '156','nama_barang' => 'Power Meter','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '157','nama_barang' => 'AC Voltage Current','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '158','nama_barang' => 'Function Generator','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '159','nama_barang' => 'Panel Kontrol-4','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '160','nama_barang' => 'DC Current Unit','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '161','nama_barang' => 'Toolset','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '162','nama_barang' => 'DC Voltage Standard','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '163','nama_barang' => 'Multi Tester','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '164','nama_barang' => 'Rak-1','merk' => '???','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '165','nama_barang' => 'Decade Resistance Box','merk' => 'okogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '166','nama_barang' => 'Audio Generator','merk' => 'Leader','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '167','nama_barang' => 'Digitizing Oscilloscope','merk' => 'HP/54201A','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445224441.jpg','kategori' => 'ASSET'),
		  array('id' => '168','nama_barang' => 'Adaptor Power supply','merk' => 'Metrionik','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '169','nama_barang' => 'Multimeter','merk' => 'HP','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '170','nama_barang' => 'Rak-2','merk' => 'Rakitan','spesifikasi' => 'Besi/Metal','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '171','nama_barang' => 'Standard Resistance','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '172','nama_barang' => 'Multitester','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '173','nama_barang' => 'Power Meter','merk' => 'Yokogawa/CW140','spesifikasi' => 'AC power demand analyzer. Includes four 500 A clip on current transformers with 30 mm internal diameter jaws. Current transformers are accurate at currents of 1 A and below.Has wiring check maps, power, VAR, Hz, VA, PF. Works at frequencies from 45 Hz to 1 kHz. Also has electric energy mode to measure Wh, Varh.Can be used to monitor & compare two separate loads. Has event & external trigger inputs & D/A outputs.Portable battery powered with large LCD screen.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445225138.gif','kategori' => 'ASSET'),
		  array('id' => '174','nama_barang' => 'Power Meter','merk' => 'Yokogawa/CW120','spesifikasi' => 'Compact & Light weight body with large back-lit LCD
		Current clamps in a range of sizes(small to large diameter)
		Support for large-capacity ATA flash memory (equipped with PC card slot)
		Data can be saved at from 1 second
		Wiring error check function
		2 or 3-load system
		Simultaneous measurement of multiple use possible by external control terminal
		Parameters setting tool is included to set measurement conditions through PC','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445225232.jpg','kategori' => 'ASSET'),
		  array('id' => '175','nama_barang' => 'Dry Block Calibrator','merk' => 'Tecal','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '176','nama_barang' => 'Rak-3','merk' => 'Rakitan','spesifikasi' => 'Besi/Metal','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '177','nama_barang' => 'Multimeter','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '178','nama_barang' => 'Oscilloscope','merk' => 'Leader','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '179','nama_barang' => 'Pneumatic Calibrator','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '180','nama_barang' => 'Thermometer Calibrator','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '181','nama_barang' => 'Computer Interface','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '182','nama_barang' => 'Regulator Presure','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '183','nama_barang' => 'PH/MV Calibrator','merk' => 'Cole Parmer','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '184','nama_barang' => 'Timer counter','merk' => 'Philips','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '185','nama_barang' => 'Recorder','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '186','nama_barang' => 'Electrode simulator','merk' => 'Omega','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '187','nama_barang' => 'Rak-4','merk' => 'Rakitan','spesifikasi' => 'Besi/Metal','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '188','nama_barang' => 'PT 100 simulator','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '189','nama_barang' => 'VA Calibrator','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '190','nama_barang' => 'Hand Pump','merk' => 'Beamex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '191','nama_barang' => 'Oscilloscope Calibrator','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '192','nama_barang' => 'Thermocouple','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '193','nama_barang' => 'IR Calibration','merk' => 'Hart Scientific 9135','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '194','nama_barang' => 'Handy Cal','merk' => 'Yokogawa','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '195','nama_barang' => 'Meja Kerja ','merk' => 'Kayu','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '196','nama_barang' => 'Deadweigght','merk' => 'Amatex','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '197','nama_barang' => 'Vacum Pump','merk' => '???','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '198','nama_barang' => 'Aneroid Barometer','merk' => '???','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '199','nama_barang' => 'Thermo Higrograph','merk' => '???','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '200','nama_barang' => 'Insulation Tester','merk' => 'EXTECH-380375','spesifikasi' => '5kV digital tester with real time voltage bar graph
		Four DC test voltages 0.5kV, 1kV, 2.5kV, 5kV
		Measure Insulation Resistance to 250G.
		Large LCD with real-time bar graph display of test voltage and voltage decay during discharge
		Microprocessor based with advanced safety features
		Test duration (up to 99.9s) is displayed
		Live circuit display warning and beeper
		Enersave™ feature to extend battery life
		Auto ranging and Auto-off functions','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445227891.jpg','kategori' => 'ASSET'),
		  array('id' => '201','nama_barang' => 'LEMARI BESI / METAL ','merk' => 'Lion','spesifikasi' => '4 Rak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1445228123.jpg','kategori' => 'ASSET'),
		  array('id' => '202','nama_barang' => 'LEMARI BESI / METAL ','merk' => 'Brother','spesifikasi' => '4 Rak','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1445228224.jpg','kategori' => 'ASSET'),
		  array('id' => '203','nama_barang' => 'LEMARI BESI / METAL ','merk' => 'Brother','spesifikasi' => '4 Rak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1445228320.jpg','kategori' => 'ASSET'),
		  array('id' => '204','nama_barang' => 'FILLING CABINET','merk' => 'Elite','spesifikasi' => '4 Laci','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1445228469.jpg','kategori' => 'ASSET'),
		  array('id' => '205','nama_barang' => 'MEJA KERJA KAYU','merk' => 'Alas Kaca','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '206','nama_barang' => 'Lemari Besi/Metal','merk' => 'Brother/Pendek','spesifikasi' => '1 Rak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1445228800.peg','kategori' => 'ASSET'),
		  array('id' => '207','nama_barang' => 'PC Desktop','merk' => 'SimX/Simbada','spesifikasi' => 'Processor core i5
		Memory 4GB
		HDD 1TB
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '208','nama_barang' => 'PC Desktop','merk' => 'Simbadda/SimX','spesifikasi' => '??','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '209','nama_barang' => 'Printer','merk' => 'HP/LaserJet P1102','spesifikasi' => '??','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445241556.png','kategori' => 'ASSET'),
		  array('id' => '210','nama_barang' => 'PC Desktop','merk' => 'Acer/M3910','spesifikasi' => '??','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '211','nama_barang' => 'Multi Function Printer','merk' => 'Canon/MX328','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '212','nama_barang' => 'Meja','merk' => 'Ligna','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '213','nama_barang' => 'Lemari Besi Pintu Geser','merk' => 'Krisbow/Filing Cab 4 Shelves Glass','spesifikasi' => 'Filing cabinet dengan 4 rak dan pintu kaca, terbuat dari material berkualitas, untuk menyimpan dokumen dan barang lain, dan cocok untuk sekolah, kantor, dan fasilitas publik yang lain. Produk ini berdimensi 1800 x 900 x 390 mm. - See more at: ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445488566.jpg','kategori' => 'ASSET'),
		  array('id' => '214','nama_barang' => 'Air Coditioneer','merk' => 'LG/Inverter ceiling concealed 36.00 btu/h','spesifikasi' => '• Pre-fabricated duct tebal 1  : 7 m²
		• PVC 2  (fresh air duct) : 10 m
		• Suply Air Gril ; 1 buah
		• Return Air Gril + filter : 1 buah
		• Pipa refrigerasi + insulasi (ASTM B280) : 15 m
		• Refrigeran R-410A DuPont : 2 Kg
		• Pipa drain + insulasi : 15 m
		• Kabel komunikasi : 25 m
		• Kabel daya : 50
		• MCB : Schneider 16 A
		• Hanger : 1 set

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445589854.jpg','kategori' => 'ASSET'),
		  array('id' => '215','nama_barang' => 'UPS','merk' => 'ICA/SIN 1500C','spesifikasi' => 'On-Line Double Conversion, UPS 2500VA/1625W, PF 0.65, Single-phase, Tower','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1445590962.jpg','kategori' => 'ASSET'),
		  array('id' => '216','nama_barang' => 'Kursi Susun','merk' => 'Futura/FTR 418ATL','spesifikasi' => 'Ranka pipa kotak
		Bahan kai : Kain karung
		Finishng : Nickel Chrome Plating/Powder
		Qoating gold metalic
		Ketebalan chrome : 20 mikron
		Powder coating : 60 mikron
		Garansi 1 tahun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1445831120.jpg','kategori' => 'ASSET'),
		  array('id' => '217','nama_barang' => 'Kursi Kuliah','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '218','nama_barang' => 'Kursi Kuliah','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '219','nama_barang' => 'Gordeen','merk' => 'Kain','spesifikasi' => 'Kain ','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '220','nama_barang' => 'Meja Kerja','merk' => 'Ligna','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '221','nama_barang' => 'PC Desktop','merk' => 'Acer','spesifikasi' => 'Core i3','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446079431.jpg','kategori' => 'ASSET'),
		  array('id' => '222','nama_barang' => 'Printer','merk' => 'Canon/MX 328','spesifikasi' => 'Features Highlight 
		- All in one Print/Scan/Copy/Fax
		- 2pl ink droplet and 4800dpi photo print resolution
		- 4-color ink system, separated black ink for document
		- Caller ID and Junk fax rejection
		- PDF/JPG direct scan to USB memory
		- 30-sheet document feeder
		- Full Dot LCD supports Traditional Chinese','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446079575.jpg','kategori' => 'ASSET'),
		  array('id' => '223','nama_barang' => 'Filing Cabinet','merk' => 'Lion','spesifikasi' => '4 Rak','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '224','nama_barang' => 'Lemari Besi','merk' => 'Lion','spesifikasi' => '4 susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '225','nama_barang' => 'Meja Kerja Kayu','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '226','nama_barang' => 'Pesawat Telephone','merk' => 'Panasonic','spesifikasi' => 'Single Line Telehone','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '227','nama_barang' => 'Rak ','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '228','nama_barang' => 'Meja Kerja Kayu','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '229','nama_barang' => 'Filing Cabinet','merk' => 'Sibas','spesifikasi' => '4 susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '230','nama_barang' => 'Lemari Besi','merk' => 'Elite','spesifikasi' => '4 susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '231','nama_barang' => 'Filing Cabinet','merk' => 'Lion','spesifikasi' => '4 susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '232','nama_barang' => 'Filing Cabinet','merk' => 'National','spesifikasi' => '4 susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '233','nama_barang' => 'Kursi Rapat','merk' => 'Futura','spesifikasi' => 'Rangka Besi ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '234','nama_barang' => 'AC','merk' => 'National','spesifikasi' => 'Cassette','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '235','nama_barang' => 'Smart HUB','merk' => 'D-LINK','spesifikasi' => '24 Port','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '236','nama_barang' => 'Lemari Besi/Metal','merk' => 'Lion','spesifikasi' => '4 Susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '237','nama_barang' => 'Lemari Besi/Metal','merk' => 'Elite','spesifikasi' => 'Pintu kaca','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '238','nama_barang' => 'Lemari Besi/Metal','merk' => 'Brother','spesifikasi' => 'Pintu kaca','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '239','nama_barang' => 'Meja Kerja','merk' => 'Ligna','spesifikasi' => '1/2 biro','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '240','nama_barang' => 'Alat Pembuat Nanopartikel  ','merk' => 'Nanotech HEM-E3d','spesifikasi' => 'High Energy Milling Elips HEM-E3d','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '241','nama_barang' => 'Rak','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '242','nama_barang' => 'Printer','merk' => 'HPLJ/P1006','spesifikasi' => 'A4, 600 x 600 dpi, 17 ppm, 1 x 150 tray, USB','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446083646.jpg','kategori' => 'ASSET'),
		  array('id' => '243','nama_barang' => 'Televisi/Home Theater','merk' => 'Sony/Bravia','spesifikasi' => '42 Inch','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '244','nama_barang' => 'Lemari Besi/Metal','merk' => 'Lion','spesifikasi' => '4 susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '245','nama_barang' => 'Rak','merk' => 'Rakitan','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '246','nama_barang' => 'Meja Kerja','merk' => 'Kayu','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '247','nama_barang' => 'Kursi Rapat','merk' => 'ICHIKO','spesifikasi' => 'Putar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '248','nama_barang' => 'GROUND RESISTANCE','merk' => 'EXTECH-382356','spesifikasi' => 'Autoranging ground resistance easurements from 0.03Ohm to 1500Ohm with 0.02Ohm resolution
		True RMS AC Leakage current range of 0.2mA to 15.00A
		0.9  (23mm) Jaw size for large ground rods
		Simplifies ground resistance measurements on multiple point ground systems
		Verification resistors confirm accuracy of meter','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446103824.jpg','kategori' => 'ASSET'),
		  array('id' => '249','nama_barang' => 'MOTOR STEVER DRIVER','merk' => 'CRYSTALAP-STD206','spesifikasi' => 'Power Input 220VAC
		Power Output 5VDC','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '250','nama_barang' => 'Loker Plastik/Exel','merk' => 'Family','spesifikasi' => '4 laci','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1446105684.png','kategori' => 'ASSET'),
		  array('id' => '251','nama_barang' => 'Speaker Aktif','merk' => 'Altec/Lansing','spesifikasi' => '4.1','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1446106331.jpg','kategori' => 'ASSET'),
		  array('id' => '252','nama_barang' => 'Handy Cam','merk' => 'Sony/DCR-TRV30E PAL','spesifikasi' => 'Packaged Quantity 1
		Width 2.8 in
		Depth 6.6 in
		Weight 1.54 lbs
		Height 3.7 in
		Enclosure Color black, silver
		Enclosure Material plastic
		Camcorder Media Type Mini DV
		Optical Sensor Type CCD
		Optical Sensor Size 1/4 
		Digital Zoom 120 x
		Image Recording Format JPEG
		Interfaces Provided S-Video, component video
		Camcorder Sensor Resolution 1.55 pixels
		Analog Video Format PAL
		Horizontal Resolution 530 dpi
		Image Stabilizer electronic
		Digital Scene Transition black fader, bounce fader, monotone fader, mosaic fader, overlap fader, random
		Shooting Modes digital photo mode, frame movie mode, normal movie mode
		Interfaces Provided Component video, S-Video
		Optical Zoom 10 x
		ManufacturerSony
		EXPOSURE & WHITE BALANCE
		Min Illumination 0 lux
		Exposure Modes automatic, manual
		Shooting Programs beach & ski, landscape, night mode, portrait mode, sports mode, spotlight, sunset & moon
		Special Effects Flash Motion, Low Shutter Speed (LSS), Solarization, Still, Stretch, Trail, Wipe, Luminance Key, Monotone, Mosaic, Negative Art, Old Movie, Pastel, Sepia, Slim
		White Balance automatic, hold, indoor, outdoor
		Max Shutter Speed 1/4000 sec
		Min Shutter Speed 1/3 sec','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1446106784.jpg','kategori' => 'ASSET'),
		  array('id' => '253','nama_barang' => 'Handy Cam','merk' => 'Sony/DCR SR200','spesifikasi' => '0-gigabyte hard drive stores over 25 hours of long-play video or over 8 hours of high-quality video
		2.1-megapixel ClearVid CMOS sensor for crystal-clear video and still images
		10x optical zoom; 80x digital zoom
		2.7-inch widescreen touch-panel Clear Photo LCD Plus display
		Handycam Station included','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446107009.jpg','kategori' => 'ASSET'),
		  array('id' => '254','nama_barang' => 'Digital Camera','merk' => 'Olympus/C480','spesifikasi' => 'Packaged Quantity 1
		Width 4.2 in
		Depth 1.4 in
		Weight 0.22 lbs
		Height 2.2 in
		Sensor Resolution 4.0 Megapixel
		Optical Sensor Type CCD
		Total Pixels 4060000 pixels
		Effective Sensor Resolution 4000000 pixels
		Optical Sensor Size 1/2.5 
		Digital Zoom 4 x
		System TTL contrast detection
		Digital Video Format QuickTime
		Image Recording Format JPEG
		ManufacturerOlympus
		EXPOSURE & WHITE BALANCE
		Light Sensitivity ISO auto (50-320)
		Exposure Metering multi-segment
		Exposure Modes automatic, program
		Shooting Programs 2 in 1, landscape-portrait, night portrait, night scene, panorama assist, portrait mode, self-portrait, snow, sports mode, sunset, available light portrait, beach, behind glass, candle, cuisine, fireworks, indoor, landscape
		Special Effects Black & White, Sepia
		White Balance automatic, presets
		White Balance Presets fluorescent, overcast, sunlight, tungsten light
		Max Shutter Speed 1/2000 sec
		Min Shutter Speed 4 sec
		Exposure Compensation ±2 EV range, in 1/2 EV steps
		CARRYING CASE
		Type none
		Included Accessories USB cable, wrist strap
		CAMERA FLASH
		Type built-in flash
		Guide Number (m / ISO 100) 7.3
		Effective Flash Range 7.9 in - 12 ft
		Red Eye Reduction Yes
		Flash Modes auto mode, backlight mode, fill-in mode, flash OFF mode, red-eye reduction
		ENVIRONMENTAL PARAMETERS
		Min Operating Temperature 32 °F
		Max Operating Temperature 104 °F
		DISPLAY
		Type 1.8  LCD display
		Display Format 85,000 pixels
		Display Form Factor built-in
		LENS SYSTEM
		Type 3 x zoom lens - 6.3 - 18.9 mm - f/2.8-4.9
		Lens Aperture f/2.8-4.9
		Macro Focus Range 0.8 in
		Zoom Adjustment motorized drive
		Focal Length Equivalent to 35mm Camera 38 m
		Min Focus Range 19.7 in
		Focus Adjustment automatic
		Optical Zoom 3 x
		Features aspherical lens, built-in lens shield
		MEMORY / STORAGE
		Installed Size 14 MB
		Supported Memory Cards xD-Picture Card, xD-Picture Card Type H, xD-Picture Card Type M
		Image Storage Super-fine JPEG 2288 x 1712 : 4 - with 14MB built-in memory
		Fine JPEG 2288 x 1712 : 14 - with 14MB built-in memory
		JPEG 1600 x 1200 : 28 - with 14MB built-in memory
		JPEG 640 x 480 : 144 - with 14MB built-in memory
		Video Capture QuickTime - 320 x 240 - 30 fps - 21 sec - with 14MB built-in memory
		QuickTime - 320 x 240 - 15 fps - 42 sec - with 14MB built-in memory
		VIEWFINDER
		Viewfinder Type none
		ADDITIONAL FEATURES
		Continuous Shooting Speed 1.3 frames per second
		Self Timer Delay 12 sec
		Features RGB primary color filter, auto power save, date/time stamp, digital image rotation, digital noise reduction, resizing an image
		CONNECTIONS
		Memory Card Slot xD-Picture Card
		SOFTWARE
		Type Drivers & Utilities, Olympus Master 1.1
		BATTERY
		Battery Type AA, CR-V3
		Details 2 x AA NiMH rechargeable battery ( optional )
		2 x AA NiCd rechargeable battery ( optional )
		2 x AA alkaline battery ( included )
		1 x CR-V3 lithium battery ( optional )
		SYSTEM REQUIREMENTS FOR PC CONNECTION
		Operating System Support Apple Mac OS X 10.2 or later, MS Windows 2000, MS Windows 98 SE, MS Windows ME, MS Windows XP
		Peripheral Devices CD-ROM drive, USB port
		GENERAL
		ManufacturerOlympus','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446107298.jpg','kategori' => 'ASSET'),
		  array('id' => '255','nama_barang' => 'Sound Blaster','merk' => 'CREATIVE/AUDIGY2ZS SB0480','spesifikasi' => 'This USB-attached video-capture/output device combines a 7.1-channel 24-bit/96-kHz Audigy sound card with a hardware-accelerated video interface. It boasts a comprehensive selection of bidirectional analog and digital audio/video interfaces, superior performance and output quality, and a generous collection of Ulead video applications.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446107958.gif','kategori' => 'ASSET'),
		  array('id' => '256','nama_barang' => 'Inductance Substituter','merk' => 'IET/LS-400A','spesifikasi' => 'Type of Substituter : Inductance
		Accuracy* : (2%+0.5 ?H)
		Decades : 3
		Range : 0 - 999 mH
		Resulotion : 1 mH','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1446109942.jpg','kategori' => 'ASSET'),
		  array('id' => '257','nama_barang' => 'Capacitance Substituter','merk' => 'IET/CS-301','spesifikasi' => 'Type of Substituter : Precision Capacitance
		Accuracy : ±(1%+3 pF)
		Decades : 6
		Range : 0- to 99.999 9 µF
		Components : 1 - 900 pF: Mica 0.001 - 0.9 &#956;F: Polypropylene
		             1 - 9 &#956;F: Polyester 10 - 900 &#956;F: Tantalum
		Ratings : 100 V (25 V for 10 - 100 &#956;F)
		Residual : &#8804;42 pF (&#8804;7 pF/decade)
		Test Conditions : 1 kHz; 1 Vrms; 120 Hz for &#8805;10 &#956;F, series model; 23ºC.
		Physical : 12 x 7.9 x 5.6 cm; 235 g
		(4.7 x 3.1 x 2.2 in; 8.3 oz.)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '258','nama_barang' => 'Hi-Speed USB Carrier','merk' => 'NI/USB-9162','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446174557.jpg','kategori' => 'ASSET'),
		  array('id' => '259','nama_barang' => 'Differential Amplifier Thermocouple','merk' => 'Natinal Instrumnet/NI 9211','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '260','nama_barang' => 'Lemari Gantung','merk' => 'Rakitan','spesifikasi' => 'Bahan Kayu','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '261','nama_barang' => 'AC','merk' => 'LG/Split','spesifikasi' => '0,5PK','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '262','nama_barang' => 'Meja Kerja','merk' => 'Rakitan','spesifikasi' => 'Alas Kayu Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '263','nama_barang' => 'Meja Kerja','merk' => 'Ligna','spesifikasi' => '1/2 Biro','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '264','nama_barang' => 'Meja Rapat','merk' => 'Ligna','spesifikasi' => 'Bentuk Persegi Panjang','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '265','nama_barang' => 'Cordless Impact Driver (Drill)','merk' => 'Makita/TD090D','spesifikasi' => 'Makita-built motor delivers 800 in.lbs. of Max Torque in an ultra compact size
		Variable speed (0-2,400 RPM & 0-3,000 IPM) for a wide range of fastening applications
		Ultra compact design at only 6-1/8  long and weighs only 2.0 lbs. for reduced operator fatigue
		Built-in L.E.D. light illuminates the work area
		Convenient 1/4  hex chuck for quick bit changes
		Ergonomic shape fits like a glove with even pressure and easy control
		Soft grip handle provides increased comfort on the job
		MakitaÂ°s proprietary hammer and anvil are made using the highest quality steel and heat hardened to last longer
		Makita 10.8V Lithium-Ion batteries provide longer run time and lower self-discharge
		The charger earned the ENERGY STAR® label for meeting the strict energy-efficient guidelines set by the US Environmental Protection Agency (EPA) and US Department of Energy (DOE)
		3-year warranty on tool and 1-year warranty on batteries and charger
		2 ea. 10.8V Lithium-Ion Battery (BL1013)
		1 Battery Charger (DC10WA)
		Tool Holster (168467-9)
		#2 Double Ended Phillips Bit (784214-0A)
		Tool Case (824842-6)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446515262.jpg','kategori' => 'ASSET'),
		  array('id' => '266','nama_barang' => 'Mixer Audio','merk' => 'Macky/DFX6','spesifikasi' => '
		    6 input channels (2 mono mic/line and 2 mono mic/stereo line)
		    Low-noise, high-headroom mic preamps with +50dB gain range and switchable phantom power on channels 1 and 2
		    32-bit EMAC digital EFX processor with 16 effects
		    5-band stereo graphic equalizer with 12dB boost/cut
		    2-band channel strip shelving EQ
		    Tape and CD inputs and tape output
		    75Hz low-cut filters and inserts on channels 1 and 2
		    Vocal eliminator function
		    Break switch for playing music between sets
		    Input trim controls with LED level set indicators
		    Separate aux send and effects send for each channel
		    2 stereo aux returns
		    Master aux monitor, effects send, and CD/tape return faders
		    Headphone output with separate rotary level control
		    Balanced/unbalanced XLR and 3/4 main stereo inputs
		    Rugged all-metal chasis
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446515681.png','kategori' => 'ASSET'),
		  array('id' => '267','nama_barang' => 'Tool Kit','merk' => 'Hozan/S-10','spesifikasi' => 'Details table (kit contents: 20 pieces)
		Alignment Tool 	D-29-100
		Phillips Screwdriver No.0 	D-540-100
		Phillips Screwdriver No.2 	D-555-100
		Slotted Screwdriver 2.5 	D-630-100
		Slotted Screwdriver 4.0 	D-640-100
		Slotted Screwdriver 5.0 	D-650-100
		Nut Driver 5.5mm 	D-840-5.5
		Nut Driver 7mm 	D-840-7
		Solder 	H-700
		Soldering Iron 	H-869
		Diagonal Cutter with Stripper 	N-9-150
		Desolder Braid 	No.3738
		Long Nose Pliers with Side Cutter 	P-15-150
		Tweezers 	P-87
		Slip Joint Pliers 	P-211Z-150
		Adjustable Wrench 	W-230-150
		Utility Knife 	 
		Electrical Tape 	 
		File Hand 	 
		File Round ','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1446517785.jpg','kategori' => 'ASSET'),
		  array('id' => '268','nama_barang' => 'Kursi Kerja','merk' => 'Icchiko ','spesifikasi' => 'Putar','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '269','nama_barang' => 'Filing Cabinet','merk' => 'Bostinco','spesifikasi' => '4 Laci','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '270','nama_barang' => 'Rak','merk' => 'Rakitan','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '271','nama_barang' => 'Kursi','merk' => 'Chitos/Warna Hitam','spesifikasi' => 'Lipat Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '272','nama_barang' => 'Lemari Besi','merk' => 'Daichi','spesifikasi' => '4 Susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '273','nama_barang' => 'Meja Kerja','merk' => '???','spesifikasi' => 'Rangka Besi/Alas Warna Hitam','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '274','nama_barang' => 'Lemari Besi','merk' => 'Lufo','spesifikasi' => '4 Susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '275','nama_barang' => 'Handy Cam','merk' => 'Sony','spesifikasi' => '???','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '276','nama_barang' => 'White Board','merk' => 'Sakura','spesifikasi' => '70x120 cm','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '277','nama_barang' => 'Filing Cabinet','merk' => 'Elite','spesifikasi' => '4 Laci','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '278','nama_barang' => 'Switch Hub','merk' => 'TP-LINK/TL-SF1008D','spesifikasi' => '8 10/100Mbps auto-negotiation RJ45 ports, supports auto MDI/MDIX
		Green Ethernet technology saves the power up to 60%
		IEEE 802.3x flow control provides reliable data transfer
		Plastic case, desktop design
		Plug and play, no configuration required','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446698335.jpg','kategori' => 'ASSET'),
		  array('id' => '279','nama_barang' => 'Lemari Gantung','merk' => 'Rakitan','spesifikasi' => 'Warna putih strip kerem','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '280','nama_barang' => 'Lemari Pendingin','merk' => 'Mitsubishi','spesifikasi' => '1 Pintu','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '281','nama_barang' => 'Meja Makan','merk' => 'Rakitan','spesifikasi' => 'Warna coklat','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '282','nama_barang' => 'Meja Saji','merk' => 'Rakitan','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '283','nama_barang' => 'Meja Kerja','merk' => 'Rakitan','spesifikasi' => 'Bahan kayu/warna coklat','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '284','nama_barang' => 'rice cooker','merk' => 'Shinil','spesifikasi' => 'Kapasitas 5kg','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '285','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'Warna biru','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '286','nama_barang' => 'Mesin Absensi','merk' => 'Solution/x-100c','spesifikasi' => '
		    Standalone, Tidak memerlukan komputer
		    Kapasitas User : 10.000 Sidikjari
		    Kapasitas Transaksi Log : 200.000 Transaksi
		    Jenis Komunikasi PC : TCP/IP (RJ45), RS232/RS485, USB Cable, USB Disk
		    Waktu respon : <= 1 detik
		    Jenis Matching : 1:1 dan 1:N
		    Fitur Standard: TFT LCD Full Color 3 Inch, PhotoID, USB Flash Disk, Web Server, Schedule Bell, SMS Message, Workcode, Function Key.
		    Dilengkapi dengan LCD dan Skeaker untuk identifikasi signal
		    SUDAH INCLUDE SOFTWARE, Data Absensi dapat ditarik ke komputer, lalu mencetak berbagai macam laporan kehadiran, dan dapat juga digunakan untuk perhitungan laporan pengajian sesuai dengan perusahaan anda.
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446702883.jpg','kategori' => 'ASSET'),
		  array('id' => '287','nama_barang' => 'Recorder IP Camera','merk' => 'Avtech/Plush Video 12Ch NVR','spesifikasi' => 'NEW AVTECH 12 Channels Network Digital recorder AVH312 for IP Cameras 1080P HDMI, Remote, USB ONVIF 2.0','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446703310.jpg','kategori' => 'ASSET'),
		  array('id' => '288','nama_barang' => 'White Board','merk' => 'Sakura','spesifikasi' => 'Ukuran 70x120 cm','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '289','nama_barang' => 'Lemari Besi','merk' => 'Datascrip','spesifikasi' => 'Warna Abu 4 Susun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '290','nama_barang' => 'Meja Dorong','merk' => 'Krisbow','spesifikasi' => 'Rangka Plastik','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '291','nama_barang' => 'Penghisap Debu','merk' => 'Hitachi/CP-950Y 220UI','spesifikasi' => 'Powerful 2000W (Max.) Motor
		Extra large 18-liter dust capacity with dust indicator
		Strong metal body
		Easy Dust Disposal
		Plastic pipe and hose stand
		Cloth filter
		On board tool storage
		Blower function

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1446768333.jpg','kategori' => 'ASSET'),
		  array('id' => '292','nama_barang' => 'Screen Projector','merk' => 'Bretford','spesifikasi' => 'Manual','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '293','nama_barang' => 'Meja Komputer','merk' => 'Crystal','spesifikasi' => 'Bahan Kayu warna krem','no_klas' => '1','satuan_jumlah' => '13','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '294','nama_barang' => 'Meja Kerja','merk' => 'Ligna','spesifikasi' => '1/2 Biro','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '295','nama_barang' => 'Printer','merk' => 'Epson/L210','spesifikasi' => 'Energy Use 	 ENERGY STAR® qualified, 13 Watt (standalone copying, ISO/IEC 24712 pattern), 1.5 Watt (sleep mode)
		Supply Voltage 	AC 100 V - 240 V,50 Hz - 60 Hz
		Product dimensions 	472&#8206; x 300 x 145 mm (Width x Depth x Height)
		Product weight 	4.4 kg
		Noise Level 	5.2 B (A) with Epson Premium Glossy Photo Paper / Photo RPM mode - 37 dB (A) with Epson Premium Glossy Photo Paper / Photo RPM mode
		Compatible Operating Systems 	Mac OS 10.5.8 or later, Mac OS 10.6+, Windows 7, Windows 7 x64, Windows 8 (32/64 bit), Windows Vista, Windows Vista x64, Windows XP, Windows XP x64
		Included Software 	Epson Scan
		Interfaces 	USB
		Sound Power 	Operation: 5.2 B (A)
		Sound Pressure 	Operation: 37 dB (A)
		Power Supply 	220V
		WhatÂ°s in the box 	4 x 70ml individual ink bottles (Bk,C,Y,M), Power cable, Setup guide, Software (CD), User manual ','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1446793263.png','kategori' => 'ASSET'),
		  array('id' => '296','nama_barang' => 'Rak','merk' => 'Rakitan','spesifikasi' => 'Bahan Kayu/Warna krem','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '297','nama_barang' => 'Kursi','merk' => 'Ichiko','spesifikasi' => 'Putar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '298','nama_barang' => 'Lux Meter','merk' => 'Lutron/LX-103','spesifikasi' => 'Lux : 0 to 50,000 Lux (3 ranges), Ft-candle : 0 to 5,000 Fc (3 ranges).
		Sensor meet C.I.E. photopic spectrum.
		2 filters, high quality.
		External offset Adj.
		Size : 131 x 70 x 25mm.
		','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '299','nama_barang' => 'Lemari Besi','merk' => 'Elite','spesifikasi' => 'Pintu Geser Kaca','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '300','nama_barang' => 'AC','merk' => 'LG JetCool','spesifikasi' => '1PK','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '301','nama_barang' => 'Meja Komputer','merk' => 'Rakitan','spesifikasi' => 'Bahan kayu rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '302','nama_barang' => 'Meja Laci','merk' => 'Ligna Furniture','spesifikasi' => 'berlaci 3','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '303','nama_barang' => 'Kursi Putar Inchiko','merk' => 'Ichiko','spesifikasi' => 'berlengan dan bisa di putar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '304','nama_barang' => 'Kursi Putar kecil','merk' => 'D','spesifikasi' => 'kursi putar kecil hitam biru','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '305','nama_barang' => 'UPS','merk' => 'Na','spesifikasi' => 'Na','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '306','nama_barang' => 'PC DESKTOP ACER ASPIRE','merk' => 'M3910','spesifikasi' => 'freedos, CORE i3 , 2GB DDR3 , DVD RW, 500GB harddisk, INTEL GMA(VGA)','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '307','nama_barang' => 'PC THERMALTAKE X','merk' => 'ases IV LVS','spesifikasi' => 'na','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '308','nama_barang' => 'LCD DELL','merk' => 'REV A00A','spesifikasi' => '14 inc','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '309','nama_barang' => 'Printer Epson l100','merk' => 'l100','spesifikasi' => 'printer infus','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '310','nama_barang' => 'LCD ACER h163hq','merk' => 'h163hq','spesifikasi' => '14 inc','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '311','nama_barang' => 'Speaker Aktif','merk' => 'Boston/BA635','spesifikasi' => '10 w','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '312','nama_barang' => 'REMOTE DUST MONITOR','merk' => 'TYPE : ES-642','spesifikasi' => '1 Pc SHARP CUT CYCLONE PM-10
		1 Pc KIT. SOLAR SHIELD (FUW ES-642)
		1 Pc MANUAL & CALIBRATION 
		CERTIFICATES
		(HARMONIZING CODE: 
		9027.10.0000)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '313','nama_barang' => 'Intelegent wireless measurement device','merk' => 'Waspmote Evaluator Kit','spesifikasi' => 'x4 Waspmote 802.15.4 PRO SMA 5 dBI
		x1  Gateway 802.15.4 PRO SMA 5 dBI
		x2 Gases BoardWaspmote
		x4 Temperature sensor
		x1 Humidity sensor
		x1 CO sensor
		x1 CO2 sensor
		x1 Air pollutants I sensor
		x1 NO2 sensor
		x2 Events Board
		x1 Presence sensor (PIR)
		x4 Luminosity LDR sensor
		x1 Smart Cities Board
		x1 Microphone (dBSPLA)
		x1 Dust Sensor - PM-10
		x1 Smart Metering Board
		x1 Ultrasound sensor (indoor)
		x1 Agriculture PRO Board
		x1 Soil temperature sensor
		x1 Soil moisture sensor
		x1 Solar radiation sensor
		x1 Weather Station WS-3000 (anemometer + wind vane + pluviometer)
		x1 Prototyping Board
		x1 GPS Module
		x1 GSM / GPRS Module
		x1 3G + GPS Module
		x2 Expansion Radio Board Module
		x1 Bluetooth module for device discovery PRO 5 dBi
		x1 Waspmote RFID 13.56 MHz
		x1 13.56 MHZ / NFC stickers (5 pack)
		x1 WiFi module 5 dBi
		x1 MicroSD 2Gb card pack (5 units)
		x4 6600 mA/h rechargeable battery
		x2 Rigid Solar Panel 7V – 500mA
		x1 Attendee place at Libelium training course *
		x1 Technical consultancy – 3 hours package','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1448591053.jpg','kategori' => 'ASSET'),
		  array('id' => '314','nama_barang' => 'PV ANALYZER','merk' => 'Solmetric/PVA-1000S','spesifikasi' => 'PV Voltage Range : 0-1000VDC
		Current Range : 0-20A DC (standard)0-30A DC (optional)
		Voltage Accuracy : +/-0.5% +/-0.25V
		Current Accuracy : +/-0.5% +/-40mA	
		I-V Trace Point : 100 or 500
		Wireless Sensor : SolSensor
		Wireless Sensor Range : 300 ft
		Irradiance Accuracy : +/-2% (typical)
		Interface to Tablet or Laptop : Wireless USB dongle (included)
		Price : $5695','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1514561328.jpg','kategori' => 'ASSET'),
		  array('id' => '315','nama_barang' => 'PV MODULE SOLAR ','merk' => 'SIM-210/24 VOLT','spesifikasi' => '...........','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '316','nama_barang' => 'Process Plant Trainer','merk' => 'Armfield','spesifikasi' => 'PCT23 MKII
		PCT 19BR
		PCT 20H
		Dekstop Lenovo','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1447646061.JPG','kategori' => 'ASSET'),
		  array('id' => '317','nama_barang' => 'Wonderware','merk' => 'Ivensys','spesifikasi' => 'qwerty','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '318','nama_barang' => 'DCS','merk' => 'Delta V','spesifikasi' => 'qwerty','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '319','nama_barang' => 'kursi','merk' => 'Futura','spesifikasi' => 'rangka stainless','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '320','nama_barang' => 'Metering skid','merk' => 'Rakitan','spesifikasi' => 'Conveyer 3 Motor','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '321','nama_barang' => 'Metering Skid Mini Plane','merk' => 'Rakitan','spesifikasi' => 'control valve
		Heater
		cooling
		kompresor','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '322','nama_barang' => 'Meja komputer','merk' => 'Crystal','spesifikasi' => 'kock down
		kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '323','nama_barang' => 'Kursi','merk' => '-','spesifikasi' => 'kursi kayu rangka besi
		','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '324','nama_barang' => 'kursi','merk' => 'chitose','spesifikasi' => 'bludru
		up down','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '325','nama_barang' => 'Meja kayu','merk' => '-','spesifikasi' => 'meja kayu rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '326','nama_barang' => 'Lemari Besi','merk' => 'Datascrip','spesifikasi' => '2 pintu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '327','nama_barang' => 'Printer/Scanner','merk' => 'HP Photosmart Plus e-All-in-One B210 Series','spesifikasi' => 'printer/scanner','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '328','nama_barang' => 'Filling Cabinet','merk' => 'Lion','spesifikasi' => '4 pintu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '329','nama_barang' => 'Kursi','merk' => 'Chitose','spesifikasi' => 'hitam','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '330','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'biru','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '331','nama_barang' => 'Water Dispenser','merk' => 'Daiyama','spesifikasi' => 'Hot/Cold','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '332','nama_barang' => 'Printer','merk' => 'HP LaserJet P1102','spesifikasi' => 'Printer laser black/white','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '333','nama_barang' => 'Meja','merk' => 'Meja Rakitan','spesifikasi' => 'Meja komputer','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '334','nama_barang' => 'Tempat Sampah','merk' => 'Lionstar','spesifikasi' => '15 liter','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '335','nama_barang' => 'Kursi','merk' => 'Kursi Kayu','spesifikasi' => 'ketinggian 1 m','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '336','nama_barang' => 'Mesin Las Inverter Serbaguna','merk' => 'Plasma/ CT-416 MMATIG','spesifikasi' => 'Mesin Las Inverter Serbaguna CT-416 MMATIGPlasma Cut Mesin las serbaguna- dimana fungsi 1 mesin las ada 3 fungsi yaitu las MMA (Besi Biasa  Stainles)- TIG ( Stainless dengan Gas Argon )- Plasma Cut ( Pemotongan Besi dengan compressor). Voltase :  220V 1 Phase- Daya Listrik :  1300 - 3000 Watt- Kapasitas Daya Input :  4.8 KVA- Arus Output :  10 - 160 A (TIG)- 10 - 150 A (MMA)- 20-40 A (CUT)- Voltase Output Rata-rata :  16V (TIG)- 27V ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '337','nama_barang' => 'Goniometer','merk' => 'LMT/GO-V1920','spesifikasi' => 'Part A: LMT-Goniophotometer with turning device ;
		Part E: power source, wattmeter, system integration,
		Part F: software and computer system, 
		Part G: commissioning and training,
		Part H: documentation and certificates, 
		Part J: warranty,
		Part K: delivery.
		Goniometer : Test object size - diagonal length min. 1.9m,
		Test object load in all mounting positions min. 20 kg;
		Horizontal axis system (C-plane), Motoric drive, 360° rotation on axis, 
		Built-in end switch Vertical axis system (&#947; angles), Motoric drive, rotation on axis, Built-in end switch: min. ±170° rotation
		Angular measurement system, absolute angular encoders, Resolution 0.1° for C and &#947;
		Hardware and software module for conversion to absolute luminous flux testing, measurement in 4pi arrangement, test objects are not moved during testing, test object size &#8805;1200Ø 
		Standard 4 pin lamp holders types E 27, E 40, G 13 which can be mounted to C-axis mounting plate, separated contacts at lamp base for line feed and sense 
		- Photometer:  Si-photometer, V(&#955;) match  &#8804;1.0%, Measurement range photometer 0.0001lx – 80.000lx ; 1 Fixed measurement distance 15m-25m, mounting station for photometer head ; Total Characteristic  3% for perpendicular light incidence in accordance with EN 13032-1:2004 Table3 
		- Power Source and Wattmeter 
		Programmable AC power source 1.500VA; Voltage range of power source 150V-300V resolution 0.1V ; Frequency range 45-50 Hz; Wattmeter equivalent to Type 310 or better; suitable for AC and DC power supplies (selectable) ; Integration of all display and control units, power supplies, wattmeter into a compact 19” rack system 
		- System Software 
		Dedicated software platform enabling PC control of goniometer, photometer, power supply, wattmeter 
		Software for automatic measurement and evaluation of the test results ; 
		Measurement selectable on C-planes, B-planes, luminous flux zonal and absolute; Output in EULUMDAT format; UGR Unified Glare Ratios ; PC and color laser print
		- Installation, Commissioning, Training, Certificates to be delivered with system
		Consulting services for planning of laboratory space; Integration of all 
		delivered components installation into a turn key system on site; Training program days 3 days on site; Certificate issued by National Metrology Institute for:  -Spectral sensitivity of the photometer head and determination of the  characteristic in accordance with EN 13032-1 as per Tenderer’s specifications  
		-Table of spectral mismatch correction factors for 8 white and coloured LEDS &#8804;1.0%  Certificate for angular measurement system employing tools traceable to ISO 17025 calibrated standards confirming repeatability of positioning C and &#947; Axis, &#8804;0.1° measured at at least 10° steps  
		- Warranty and after sales service 
		The tenderer shall provide free of charge qualified remote support during the (warranty period 24 months) (reaction time 24 hours) in regards to questions of usage of delivered equipment as well as resolution of equipment faults; 
		The tenderer shall provide free of charge on-site support during the warranty period (24 months) (72 hour reaction time) in regards to resolution of equipment faults which cannot be solved by remote support
		-Transport :  CIP Jakarta Airport;  Limit term of the delivery
		','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1448261900.jpg','kategori' => 'ASSET'),
		  array('id' => '338','nama_barang' => 'Lemari Rak Buku','merk' => 'n/a','spesifikasi' => 'Berlaci banyak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '339','nama_barang' => 'Lemari Rak Buku Laci satu buah','merk' => 'kayu','spesifikasi' => 'di atas rak buku, di bawah berlaci satu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '340','nama_barang' => 'Lemari Berkaca','merk' => 'kayu kaca','spesifikasi' => 'lemari dengan kaca di atasnya dan laci di bawahnya','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '341','nama_barang' => 'Jam Dinding','merk' => 'putih kaca','spesifikasi' => 'putih kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '342','nama_barang' => 'AC Casette','merk' => 'national','spesifikasi' => '2PK','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '343','nama_barang' => 'Kursi biru','merk' => '-','spesifikasi' => 'rangka besi, bahan plastik','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '344','nama_barang' => 'Meja Komputer','merk' => '-','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '345','nama_barang' => 'TV LED','merk' => 'Samsung ','spesifikasi' => '40  UHD','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '346','nama_barang' => 'Rak Sound system','merk' => '-','spesifikasi' => 'Rakitan','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '347','nama_barang' => 'AC Casette','merk' => 'National','spesifikasi' => '2PK','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '348','nama_barang' => 'Air Pollution Multigas Calibrator','merk' => 'HORIBA/APMC-370 Mass-Flow-Controller (MFC)','spesifikasi' => 'Principle:  Dynamic generation of span gas from gas cylinders, dilution of common gases
		• Accuracy of MFC : +/-0.5% of the actual value plus +/-0.1% of full scale
		• Reproducibility of MFC : better than 0.1% of reading
		• Repeatability of MFC : better than 0.2% of the reading
		• Linearity of MFC : +/-0.1% full scale
		• Pressure Sensitivity : 0.1% / bar typical for N2
		• Inlet Pressure : 1 bar
		• Total Flow Rate Max : approx. 0.1 – 5.2 l/min
		• Accuracy Span Gas : better 1%, varying flow rate of one MFC
		• Temperature Range (ambient air) : 5 – 40 degC
		• Humidity (ambient air) : max. 85%, noncondensing
		• Interfaces : 2 x RS232, eg. Geystec Protocol
		(others on request), 1 x 10/100 MBit Ethernet,
		• Display : TFT 640 x 480 Pixel with touch screen
		• Connectors : Zero Gas 6mm PVDF, Span Gas 3mm PVDF, Stainless Steel and/or inch
		•  Gas Flow Regulation – Dilution Gas : Standard Range : 0.1 – 5 l/min 
		• Gas Flow Regulation – Span Gas 1 : Standard Range : 4 – 200 ml/min','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1448427210.jpg','kategori' => 'ASSET'),
		  array('id' => '349','nama_barang' => 'Ambient Particulate Monitor ','merk' => 'Metone/ES642 PM10','spesifikasi' => 'Measurement Principles:  Particulate concentration by forward light scatter laser Nephelometer. 
		Cut Points: PM10 sharp-cut cyclone inlets. 
		Measurement Range: 0 to 100 mg/m³ (0 to 100,000 g/m³)
		Measurement Sensitivity: .001 mg/m³.
		Nephelometer Accuracy: ± 5% traceable standard with 0.6um PSL.
		Particle Size Sensitivity: 0.1 to 100 micron. Optimal sensitivity 0.5 to 10 micron particles.
		Display: 2 X 16 backlit LCD. Provides information on operation, including: Power, Flow
		Operation, Status and Concentration.
		Zero Calibration: Automatic Zero Calibration every hour or as programmed from 1 
		to 999 minutes. 
		Flow Rate: 2.0 liters/minute ± 0.1 lpm.
		Power: 10 – 40 VDC @ 1.5 A maximum.
		Power Consumption: 350 mA (no heater) 1.1 A (with heater) @ 15 VDC. 
		Analog Output: 4-20 mA and 0 – 10 VDC.
		Digital I/O: RS-485 full and half duplex, RS-232.
		Serial Communication: ASCII Text data format and MODBUS RTU.
		Mounting Options: Wall mount bracket standard. ','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1448427480.jpg','kategori' => 'ASSET'),
		  array('id' => '350','nama_barang' => 'Gas Cylinder Calibration Standard','merk' => '????????????','spesifikasi' => 'Gas yang dipakai untuk kalibrasi di laboratorium  atau outdoor dengan menggunakan portable gas sensor
		Mempunyai hanya satu  macam jenis komposisi gas (NO2, O3, CO, SO2) 
		Tingkat keakuratan yang tinggi berdasarkan pada hitungan molekul part per million (ppm)
		Masing-masing gas 1 tabung','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '351','nama_barang' => 'Hydrogen Generator & Storage','merk' => 'HG60','spesifikasi' => '1 unit HG60 Hydrogen Generator
		1 x unit Heliocentris – Metal Hydride 760nl

		HG60
		Production capacity 60 sl/h
		Hydrogen purity > 6.0 (99.99999%)
		Outlet pressure 1.4 - 10.7 bar (selectable)
		Required water quality max. 2 mikro S/cm, delonezed or distilled
		Operating temperature 15 - 40 derajat C
		Input voltage 120 atau 240 VAC/50 - 60 Hz
		Max. consumption (selectable) 349 / 480 VA','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '352','nama_barang' => 'Battery Hybrid Inverter','merk' => 'SMA Sunny Island SI 8.0H-11 incl. SRC 20 + Speedwire','spesifikasi' => 'AC output (loads / stand-alone grid) 
		Rated grid voltage / AC voltage range 230 V / 202 V ... 253 V 
		Rated frequency / frequency range (adjustable) 50 Hz / 45 Hz ... 65 Hz 
		Rated power (for Unom / fnom / 25°C / cos &#981; = 1) 6 000 W 
		AC power at 25°C for 30 min / 5 min / 3 sec = 8 000 W / 9 100 W / 11 000 W 
		AC power at 45°C 5430 W 
		Rated current / maximum output current (peak) 26 A / 120 A 
		Total harmonic factor output voltage / power factor< 4 % / -1 ... +1 – 
		AC input (PV array, grid or MC-Box) 
		Rated input voltage / AC input voltage range 230 230 V / 172.5 V ... 264.5 V 
		Rated input frequency / allowable input frequency range 50 Hz / 40 Hz ... 70 Hz 
		Maximum AC input current 50 A 
		Maximum AC input power 11 500 W 
		-Battery DC input 
		Rated input voltage / DC voltage range 48 V / 41 V ... 63 V 
		Maximum battery charging current 140 A 
		Rated DC charging current / DC discharging current 115 A / 136 A 
		Battery type / battery capacity (range) FLA, VRLA / 100 Ah ... 10 000 Ah 
		Charge control IUoU charge procedure with automatic full charge and equalization charge. 
		Maximum efficiency 95 % 95 % 
		Self-consumption without load / standby < 26 W / < 4 W 
		Accessories
		1 x Sunny Webbox Rs485 bluetooth
		1 x RS485 Interface  SMACOM
		1 x SI-Shunt 400 Ampere
		16 x Battery RA12-100D (VLRA 12 VDC , 100 Ah, Deep cycle)
		','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1448432919.gif','kategori' => 'ASSET'),
		  array('id' => '353','nama_barang' => 'I-V Curves and PV Performance Verification Kit','merk' => 'Solmetric/PVA-1000S PV Analyzer Kit','spesifikasi' => '   Features
		        Measures and displays I-V and P-V curves and key parameter values.
		        Advanced built-in PV models provide immediate PV performance checking.
		        Database of more than 10,000 modules, with automatic updates.
		        Automates data management, analysis, and reporting.
		        Measures string-after-string, combiner-after-combiner, without overheating or slowing down your measurements.
		        Clear, colorful, touch-capable software runs on your tablet or notebook PC, providing rich insight into PV performance.
		        Accurately measures high-efficiency modules and strings.
		        Wireless interfaces for faster setup, safer work environment, and freedom of movement during PV troubleshooting.
		    Electrical Specifications
		        PV voltage: 0-1000 V DC
		        PV current: 0-20A DC
		        Measurement sweep time: <250 ms
		        Voltage accuracy (0 to 55 C): +/-0.5% +/-0.25V
		        Current accuracy (0 to 55 C): +/-0.5% +/-40ma
		        I-V trace points: 100, 500
		        Wireless sensor range: >300 ft
		        Operating ambient temperature: -10 to 65 C (14 to 145 deg F)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1448433354.jpg','kategori' => 'ASSET'),
		  array('id' => '354','nama_barang' => 'Grid-Tie PV System 8.4kWp','merk' => 'PV Module Solar SIM-210','spesifikasi' => '24 Volt = 40 unit
		Tipe Mono-crystalline Silicon
		Tegangan Operasi 24 Volt
		Karakteristik Elektrik
		Power ( Pmax) 210 Watts
		Power Tolerance ± 5%
		Open Circuit Voltage ( Voc) 30.58 V
		Short Circuit Voltage ( Isc ) 8.80 A
		Maximum Power Voltage ( Vpm ) 25.58 V
		Maximum Power Current ( Ipm ) 8.26 A
		Maximum System Voltage 1,000 V
		Karakteristik Mekanik
		Manufactured under certified factory ISO9001: 2008, ISO14001 and OHSAS 18000
		Solar Cells 36 laser cutted multicrytalline configured geometrically for a 9x4 matrix connected in series
		Construction High tempered anti reflective 3.2mm glass
		High quality EVA encapsulated with Polyester backsheet
		Frame 6063T6 Silver Anodized Aluminium Alloy
		Dimension 1324 x 987 x 45 mm
		Weight 15.4 Kg
		PV Cable Wiring

		Accessories
		2 x Sunny Boy 5000TL-21 with PCM
		2 x RS485 Interface for SB5000TL','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '355','nama_barang' => 'Inteligent Wireless Measurment Device','merk' => 'Waspmote Evaluator Kit','spesifikasi' => 'Aksesories','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '356','nama_barang' => 'Genset','merk' => 'Kohler','spesifikasi' => '63KW','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '357','nama_barang' => 'Meja Komputer','merk' => 'crystal','spesifikasi' => 'kaca, kayu,','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '358','nama_barang' => 'Jam Dinding','merk' => 'quartz','spesifikasi' => 'jam','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '359','nama_barang' => 'white board','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '360','nama_barang' => 'Air Conditioner LG','merk' => 'LG SL2LF-N','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '361','nama_barang' => 'LCD Projector Epson','merk' => 'Epson','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '362','nama_barang' => 'Speaker (sound)','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '363','nama_barang' => 'Gorden','merk' => 'n/a','spesifikasi' => 'warna hitam','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '364','nama_barang' => 'Rak Sepatu','merk' => 'n/a','spesifikasi' => 'plastik','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '365','nama_barang' => 'Rak Besi','merk' => 'n/a','spesifikasi' => 'n.a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '366','nama_barang' => 'Screen Otomatis','merk' => 'grandview','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '367','nama_barang' => 'screen putih berkaki','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '368','nama_barang' => 'Meja Rakitan','merk' => 'n/a','spesifikasi' => 'atas corak putih','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '369','nama_barang' => 'Meja Kerja','merk' => 'n/a','spesifikasi' => 'berlaci,kayu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '370','nama_barang' => 'Meja Rakitan','merk' => 'n/a','spesifikasi' => 'rakitan, kayu, ','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '371','nama_barang' => 'Meja Kerja Laci','merk' => 'n/a','spesifikasi' => 'berlaci & kotak penyimpanan PC','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '372','nama_barang' => 'Hub TP-link TL1008D','merk' => 'TP-link TL1008D','spesifikasi' => '8 port','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '373','nama_barang' => 'PC Acer m1800','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '374','nama_barang' => 'PC HP 110 Desktop PC series','merk' => 'HP 110 Desktop PC series','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '375','nama_barang' => 'PC HP Compaq Dx2390 Micro Tower','merk' => 'HP Compaq Dx2390','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '376','nama_barang' => 'PC Lenovo ThinkCentre 7298','merk' => 'Lenovo ThinkCentre 7298','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '377','nama_barang' => 'LCD Lenovo nm9022','merk' => 'Lenovo nm9022','spesifikasi' => '14 inc','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '378','nama_barang' => 'LCD COmpaq nm972A','merk' => 'COmpaq nm972A','spesifikasi' => '14 inc','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '379','nama_barang' => 'Lemari Kaca','merk' => 'rak tools kaca','spesifikasi' => 'pintu kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '380','nama_barang' => 'Rak Kayu','merk' => 'rakitan','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '381','nama_barang' => 'Rak kayu panjang','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '382','nama_barang' => 'Lemari Besi','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '383','nama_barang' => 'Rak Besi','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '384','nama_barang' => 'Kursi Bulat','merk' => 'n/a','spesifikasi' => 'kayu,batang besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '385','nama_barang' => 'Kursi futura','merk' => 'futura','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '386','nama_barang' => 'kursi rakitan','merk' => 'n/a','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '387','nama_barang' => 'kursi besi','merk' => 'n','spesifikasi' => 'n','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '388','nama_barang' => 'kursi kayu','merk' => 'n','spesifikasi' => 'n','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '389','nama_barang' => 'Kursi anyaman','merk' => 'atas anyaman','spesifikasi' => 'atas anyaman','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '390','nama_barang' => 'Lemari Kayu','merk' => 'kayu','spesifikasi' => 'kayu besar','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '391','nama_barang' => 'Meja Rapat Kecil','merk' => 'n/a','spesifikasi' => 'kayu oval','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '392','nama_barang' => 'Printer Epson L210','merk' => 'Epson L210','spesifikasi' => 'infus','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '393','nama_barang' => 'File Cabinet','merk' => 'Elite','spesifikasi' => 'laci, besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '394','nama_barang' => 'Printer HP Deskjet D2666','merk' => 'HP Deskjet D2666','spesifikasi' => 'infus','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '395','nama_barang' => 'Printer HP Laser Jet 1016','merk' => 'HP Laser Jet 1016','spesifikasi' => 'laser jet','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '396','nama_barang' => 'PC Rakitan','merk' => 'n/a','spesifikasi' => 'casing simbadda SMC 5890','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '397','nama_barang' => 'Penghancur Kertas','merk' => 'Ideal','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '398','nama_barang' => 'Fotocopy Canon','merk' => 'canon IR2230','spesifikasi' => 'scanner,fotocopy','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '399','nama_barang' => 'Kulkas Sharp','merk' => 'sharp','spesifikasi' => '1 pintu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '400','nama_barang' => 'Dispenser Midea','merk' => 'Midea','spesifikasi' => 'n/a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '401','nama_barang' => 'Meja Tamu','merk' => 'n.a','spesifikasi' => 'kayu kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '402','nama_barang' => 'Lemari Besi','merk' => ' Data Script','spesifikasi' => '2 pintu, besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '403','nama_barang' => 'Printer Hp Laser Jet P1102w','merk' => 'Hp Laser Jet P1102w','spesifikasi' => 'laser jet','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '404','nama_barang' => 'Printer HP Laser Jet 1010','merk' => 'HP Laser Jet 1010','spesifikasi' => 'laser jet','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '405','nama_barang' => 'Meja Kerja Kayu','merk' => 'rakitan','spesifikasi' => '2 laci (1 laci = besar, 1 kecil)','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '406','nama_barang' => 'Rak Kayu','merk' => 'rakitan','spesifikasi' => '4 laci','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '407','nama_barang' => 'Lemari Kayu','merk' => 'rakitan ','spesifikasi' => '3 pintu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '408','nama_barang' => 'Meja Kayu','merk' => 'rakitan','spesifikasi' => 'ada raknya 4 ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '409','nama_barang' => 'Meja kayu','merk' => 'rakitan','spesifikasi' => '1 pintu dan 3 rak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '410','nama_barang' => 'Meja Kayu','merk' => 'rakitan','spesifikasi' => '4 pintu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '411','nama_barang' => 'TV Sony Triniton','merk' => 'Sony Triniton','spesifikasi' => '14 inc','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '412','nama_barang' => 'Hub Tp-link SF1008D','merk' => 'Tp-link SF1008D','spesifikasi' => '8 ports','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '413','nama_barang' => 'File Cabinet Besi','merk' => 'Lion','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '414','nama_barang' => 'Smartswitch Cisco 2960G','merk' => 'Cisco 2960G','spesifikasi' => 'Cisco 2960G','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '415','nama_barang' => 'RouterBoard Mikrotik Cloud Core CCR-1015','merk' => 'Mikrotik Cloud Core CCR-1015','spesifikasi' => 'router','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '416','nama_barang' => 'Switch Trendnet 240ws','merk' => 'Trendnet 240ws','spesifikasi' => '24','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '417','nama_barang' => 'switch D-link 10248','merk' => 'D-link 10248','spesifikasi' => 'D-link 10248','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '418','nama_barang' => 'Server Super Micro 818-14','merk' => 'Super Micro 818-14','spesifikasi' => 'Super Micro 818-14','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '419','nama_barang' => 'LCD ViewSonic Va503b','merk' => 'ViewSonic Va503b','spesifikasi' => 'ViewSonic Va503b','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '420','nama_barang' => 'LCD View Sonic VA1912wb','merk' => 'View Sonic VA1912wb','spesifikasi' => 'View Sonic VA1912wb','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '421','nama_barang' => 'KVM Switch D-link dkvm-4','merk' => 'D-link dkvm-4','spesifikasi' => 'D-link dkvm-4','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '422','nama_barang' => 'Server Dell 2950','merk' => 'Dell 2950','spesifikasi' => 'Dell 2950','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '423','nama_barang' => 'Lemari Rak Server Bostineo','merk' => 'Rak Server Bostineo','spesifikasi' => 'Rak Server Bostineo','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '424','nama_barang' => 'PC Server FE','merk' => 'n.a','spesifikasi' => 'n.a','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '425','nama_barang' => 'R&D Kit','merk' => 'Open BCI','spesifikasi' => '	This all-on-one, comprehensive kit contains everything you need to get up and running with a 16-channel, OpenBCI biosensing suite. The OpenBCI 32-bit board and daisy module can be used to sample brain activity (EEG), muscle activity (EMG), and heart activity (EKG). The system communicates wirelessly to a computer via the the OpenBCI programmable USB dongle, which is based on the RFDuino radio module. It can also communicate wirelessly to any mobile device or tablet compatible with Bluetooth Low Energy (BLE).','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1451437243.jpg','kategori' => 'ASSET'),
		  array('id' => '426','nama_barang' => 'Generator HF Surgery Unit ','merk' => 'WaMed-01','spesifikasi' => 'WaMed-01  SPESIFIKASI
		Input Power : 220 V, 50 ??? 60 Hz
		Ukuran : 265 x 100 x 200 mm
		Berat : + / - 3.5 ( Kg)','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1451444434.jpg','kategori' => 'ASSET'),
		  array('id' => '427','nama_barang' => 'Brightline Pro Red Line Projecting Alignment Las','merk' => 'LaserGlow','spesifikasi' => '(Cylindrical Lens CYL) *Output Power: 5 mW to 40 mW
		*Expected Life: 3000-5000 hours
		*Projection Type (dot/line/cross): Line
		*Key Feature: Projects a focus-adjustable red line for high precision applications.
		*Minimum achievable line thickness: 0.5 mm at 30 cm
		*Package Includes: Alignment laser mounted in block (mounting bracket and power supply optional)
		*Casing: Machined Aluminum
		*Line Straightness: Better than 0.1% over full length
		Item :Brightline Pro Red Line Projecting Alignment Laser  ,  Projection Type: Line
		(Cylindrical Lens CYL), Power (mW): 40 mW  Fan Angle (???):100  Safety Class : 3R  ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1451444620.jpg','kategori' => 'ASSET'),
		  array('id' => '428','nama_barang' => 'David  Laser Scanner Kit - 2','merk' => 'David laser scanner pro edition 3','spesifikasi' => 'New : David laser scanner pro edition 3 sofware on a USB Flash drive High - Resolution 2 - megapixel webcam(1600 x 1200) with autofocus (Logitech quickcam 9000 pro); Stand for webcam; Red line laser Module (650nm, class 1 laser) with adjustable focus including battery Calibration panel (for object sizes up to 40cm); User manual; Base plate four mounting the calibration panels
		Requirements :
		Standart PC (32/64 bit - Windows xp,7, 8 vista; 2 available USB ports 3D;  graphics adapter
		Recommended : 2 GHz CPU, >1 GB RAM, NVIDIA or AMD graphics processor
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1451444766.jpg','kategori' => 'ASSET'),
		  array('id' => '429','nama_barang' => 'Camera SLR   ','merk' => 'Canon EOS 700 D Body only','spesifikasi' => 'APS-C Digital SLR, 18.0 Megapixel, Full HD, 3.0  Vari-Angle Touchscreen LCD, SD/SDHC/SDXC Card Slot, Multi Shot Noise Reduction, DIGIC 5 ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1451444877.jpg','kategori' => 'ASSET'),
		  array('id' => '430','nama_barang' => 'Lemari Rakitan','merk' => 'na','spesifikasi' => 'besar, terdapat tempat lcd besar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '431','nama_barang' => 'LCD TV Sharp Quatron 3d','merk' => 'Sharp Quatron 3d','spesifikasi' => 'besar. ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '432','nama_barang' => 'whiteboard panasonic kx-b520','merk' => 'panasonic kx-b520','spesifikasi' => 'na','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '433','nama_barang' => 'dispenser sharp','merk' => 'sharp','spesifikasi' => 'sharp','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '434','nama_barang' => 'PC Desktop','merk' => 'Enlight','spesifikasi' => '????','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '435','nama_barang' => 'Monitor','merk' => 'HP/w2408h','spesifikasi' => 'Warna hitam 24 ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452568074.jpg','kategori' => 'ASSET'),
		  array('id' => '436','nama_barang' => 'Monitor','merk' => 'Samsung/Syncmas 733NW','spesifikasi' => 'Screen Size: 17  Widescreen
		Resolution: 1,440 x 900
		Contrast Ratio: DC 15000:1
		Response Time: 8ms','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452568412.jpg','kategori' => 'ASSET'),
		  array('id' => '437','nama_barang' => 'Printer','merk' => 'HP/CP1025 color','spesifikasi' => 'Up to 16 ppm
		Black: As fast as 15.5 sec
		Color: As fast as 27.5 sec

		Print quality black (best)

		        Up to 600 x 600 dpi

		Print quality color (best)
		Up to 600 x 600 dpi
		Duty cycle (monthly, A4)
		Up to 15,000 pages','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452568650.jpg','kategori' => 'ASSET'),
		  array('id' => '438','nama_barang' => 'Printer','merk' => 'HP/PSC 1315 all in one','spesifikasi' => ' Photo-quality prints, scans, and copies; slim, compact all-in-one
		Up to 17 ppm print speed; up to 4,800 x 1,200 optimized dpi color resolution
		36-bit color scan depth, 600 dpi optical resolution
		Up to 17 cpm, 50% to 400% copy enlargement/reduction
		USB and PictBridge interfaces; PC and Mac compatible','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452568800.jpg','kategori' => 'ASSET'),
		  array('id' => '439','nama_barang' => 'Lemari Besi','merk' => 'Lion/2 pintu','spesifikasi' => 'Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452569007.jpg','kategori' => 'ASSET'),
		  array('id' => '440','nama_barang' => 'Lemari Kayu','merk' => '....','spesifikasi' => 'Warna coklat tu','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '441','nama_barang' => 'Filing Cabinet','merk' => 'Elite','spesifikasi' => '4 laci','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452569268.peg','kategori' => 'ASSET'),
		  array('id' => '442','nama_barang' => 'Lemari Kayu','merk' => 'Pendek','spesifikasi' => '4 pintu','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '443','nama_barang' => 'Meja Rapat','merk' => 'Ligna','spesifikasi' => '...','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '444','nama_barang' => 'Meja Kerja','merk' => '...','spesifikasi' => '1/2 biro','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '445','nama_barang' => 'Loker','merk' => '...','spesifikasi' => 'Kayu 4 laci
		4 pintu
		12 kotak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '446','nama_barang' => 'Meja Komputer','merk' => '...','spesifikasi' => 'Warna coklat','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '447','nama_barang' => 'UPS','merk' => 'ICA/CE1200','spesifikasi' => '....','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1452570063.peg','kategori' => 'ASSET'),
		  array('id' => '448','nama_barang' => 'Smart TV','merk' => 'LG/Full HD Smart TV','spesifikasi' => 'Smart TV 42 ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '449','nama_barang' => 'Meja Tamu','merk' => 'Ligna','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '450','nama_barang' => 'kursi tamu','merk' => 'ligna','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '451','nama_barang' => 'Lemari Kaca','merk' => 'Yamato','spesifikasi' => 'rangka besi, pintu geser kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '452','nama_barang' => 'Televisi LED','merk' => 'samsung','spesifikasi' => '47 ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '453','nama_barang' => 'Lemari Kaca','merk' => 'Daiko','spesifikasi' => 'rangka besi + pintu geser kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '454','nama_barang' => 'Lemari Kayu','merk' => '-','spesifikasi' => 'kayu Jati','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '455','nama_barang' => 'Lemari Besi','merk' => 'president','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '456','nama_barang' => 'Lemari Arsip','merk' => 'TOP','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '457','nama_barang' => 'Meja kerja','merk' => '-','spesifikasi' => 'rangka kayu, alas kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '458','nama_barang' => 'Sofa','merk' => '-','spesifikasi' => 'Bahan Oscar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '459','nama_barang' => 'Meja Tamu','merk' => '-','spesifikasi' => 'rangka kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '460','nama_barang' => 'meja komputer','merk' => '-','spesifikasi' => 'rangka besi alas kayu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '461','nama_barang' => 'Lemari Besi','merk' => 'National','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '462','nama_barang' => 'Filling kabinet','merk' => 'Lion','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '463','nama_barang' => 'Meja Praktikum','merk' => '-','spesifikasi' => 'rangka besi, alas kayu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '464','nama_barang' => 'Kompresor','merk' => 'PUMA','spesifikasi' => 'biru','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '465','nama_barang' => 'Power Supply','merk' => 'Kikusuy','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '466','nama_barang' => 'Kursi Lipat','merk' => 'chitose','spesifikasi' => 'rangka besi, alas meja ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '467','nama_barang' => 'white board','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '468','nama_barang' => 'Thermoanemometer','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '469','nama_barang' => 'Higrometer','merk' => '-','spesifikasi' => 'Heat stress meter','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '470','nama_barang' => 'Anometer','merk' => 'HIOKI 3442','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '471','nama_barang' => 'lemari kaca','merk' => 'datascript','spesifikasi' => 'rangka besi, pintu kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '472','nama_barang' => 'lemari kaca','merk' => '-','spesifikasi' => 'rangka kayu, pintu kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '473','nama_barang' => 'Hygrometer','merk' => 'imura daikin','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '474','nama_barang' => 'Co2 Analyzer','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '475','nama_barang' => 'Scanning Thermometer','merk' => 'Digisence','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '476','nama_barang' => 'Balometer','merk' => 'Alnoir','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '477','nama_barang' => 'Smart TV ','merk' => 'LG/43LF59','spesifikasi' => 'Screen Size        : 42  (107cm)
		Resolution         : 1920 x 1080
		Backlight Type     : LED
		Field Refresh Rate : 50Hz
		Broadcasting System
		Tuner              : MPEG-2/4 DVB-T (HD
		Video
		Triple XD Engine    : Yes
		Resolution Upscaler : Full HD
		Real Cinema 24p     : Yes
		Noise Reduction     : Yes
		Picture Modes       : Yes (8 Modes)
		Audio
		Audio Decoder    : Yes (Dolby Digital/AAC/PCM)
		Speakers         : Stereo
		Audio Output     : 10W Total
		Surround System  : Virtual Surround
		Sound Mode       : Yes (6 Modes)
		Convenience Features
		Smart Mobile Link (MHL 2.0) : Yes (MHL enabled Android Smartphone or Tablet & MHL cable required (sold separately).)
		Time Machine                : Yes (External USB HDD required) (External USB hard drive (min. 40GB) required and sold separately)
		USB Video Playback Formats  : DivX (XViD, H.264/MPEG-4 AVC)/ WMV/AVI/M4V/MOV/3GP/3G2/ MKV/TS/TP/MTS/M2TS
		USB Music Playback Formats  : MP3/WAV/OGG/WMA
		USB Photo Playback Formats  : JPEG/PNG/BMP
		EPG (SI - 8 days)           : Yes
		Smart Energy Saving         : Yes
		Antenna Booster             : Yes
		Side Connection
		HDMI Input               : Yes (1)
		USB Input                : Yes (1)
		Headphone (3.5mm) Output : Yes (1)
		Rear Connections
		HDMI Input                       : Yes (1)
		Antenna Input                    : Yes (1)
		Composite Input                  : Yes (1)
		Component/Composite Shared Input : Yes (1)
		Audio (Optical) Output           : Yes (1)
		Dimensions
		With Stand (WxHxD)                : 959mm x 611mm x 218mm
		Without Stand (WxHxD)             : 959mm x 570mm x 57mm
		Weight with stand (without stand) : 9.5kg (9.2kg)
		VESA Size                         : 400mm x 400mm
		General
		Warranty           : 1 Year Warranty - Parts and Labour
		Energy Star Rating : 6 Star

		','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '478','nama_barang' => 'SwitcManaged','merk' => 'TrendNet/TEG-S24G','spesifikasi' => 'GREENnet technology reduces power consumption by up to 70%*
		24 x Gigabit Auto-MDIX RJ-45 ports
		Sturdy metal rackmount switch with built in power supply
		48Gbps forwarding capacity
		Limited Lifetime Warranty*','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1453944158.jpg','kategori' => 'ASSET'),
		  array('id' => '479','nama_barang' => 'Kursi Lipat','merk' => 'Futura','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '480','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '481','nama_barang' => 'kursi','merk' => 'chitose','spesifikasi' => 'up n down','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '482','nama_barang' => 'Meja','merk' => '-','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '483','nama_barang' => 'Filling Kabinet','merk' => 'Elite','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '484','nama_barang' => 'Lemari','merk' => 'President','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '485','nama_barang' => 'White Board','merk' => '-','spesifikasi' => 'rangka kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '486','nama_barang' => 'Televisi LED','merk' => 'Samsung','spesifikasi' => '47 inch','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '487','nama_barang' => 'Dispenser','merk' => 'Denpoo','spesifikasi' => 'Hot n cool','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '488','nama_barang' => 'PC Dekstop','merk' => 'Acer M1800','spesifikasi' => 'Intel Pentium','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '489','nama_barang' => 'PC dekstop','merk' => 'Acer M3910','spesifikasi' => 'Intel Core i3','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '490','nama_barang' => 'PC Dekstop','merk' => 'HP Compaq DX2300','spesifikasi' => 'Intel Pentium D','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '491','nama_barang' => 'Lemari','merk' => 'Elite','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '492','nama_barang' => 'Lemari','merk' => '-','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '493','nama_barang' => 'Kulkas','merk' => 'Sharp ultra cycle','spesifikasi' => '1 pintu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '494','nama_barang' => 'Lemari','merk' => '-','spesifikasi' => 'kayu, pintu kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '495','nama_barang' => 'Meja','merk' => '-','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '496','nama_barang' => 'Kursi Lipat','merk' => 'Chitose','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '497','nama_barang' => 'Meja Kayu','merk' => '-','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '498','nama_barang' => 'Meja kerja','merk' => '-','spesifikasi' => 'rangka besi alas kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '499','nama_barang' => 'lemari','merk' => 'lion','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '500','nama_barang' => 'mesin bubut','merk' => 'simonet','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '501','nama_barang' => 'meja kerja','merk' => '-','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '502','nama_barang' => 'Mesin Bor','merk' => 'rexon','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '503','nama_barang' => 'milling n drilling machine','merk' => 'AG32','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '504','nama_barang' => 'fresize machine','merk' => 'Acierra','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '505','nama_barang' => 'mesin bubut','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '506','nama_barang' => 'Mesin lipat','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '507','nama_barang' => 'mesin gurinda','merk' => 'Kinfuji','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '508','nama_barang' => 'Meja Kerja','merk' => '-','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '509','nama_barang' => 'Ragum','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '510','nama_barang' => 'Gunting plate','merk' => '-','spesifikasi' => 'manual','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '511','nama_barang' => 'Lemari besi','merk' => 'Atmi','spesifikasi' => '2pintu','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '512','nama_barang' => 'PC dekstop','merk' => 'Acer M1800','spesifikasi' => 'intel pentium','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '513','nama_barang' => 'Power Studio Monitor','merk' => 'KRK/Rokit Powered 5','spesifikasi' => 'Speaker Monitor Studio Aktif Merk : KRK ROKIT Powered 5 Generation 2 Powered Studio Monitor Umum (International Branded)
		Speaker monitor studio aktif 75 Watt dengan respon frekuensi 53-200KHz.
		Konfigurasi: 2-way
		Jenis Speaker: Monitor Studio Aktif
		Woofer :5? Glass ramid Composite Woofer
		Tweeter : 1? Neodymium Soft Dome Tweeter dengan Ferro Fluid
		Input:  XLR (3-pin), RCA & 1/4? TRS - 10 kOhm, Input balanced dan unbalanced
		Amplifikasi: 75 Watt Bi-amp Dynamic Power, 18 dB Octave Filter
		SPL Peak Max: 106 dB
		Kelas Amplifier: Class A-B
		Power Output: 45 Watt
		Frekuensi Tinggi : 15 Watt
		Frekuensi Rendah: 30 W
		Impedansi Input : 10 kOhm balanced
		Garansi : minimal 1 tahun uji fungsi
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1453969702.png','kategori' => 'ASSET'),
		  array('id' => '514','nama_barang' => 'Kursi','merk' => 'Chitose/Cavis','spesifikasi' => 'Kursi Susun / Banquet Chair merk Chitose, type CAVIS terdiri dari spesifikasi :
		Dimension WxDxH (mm) : 476 x 506 x 775
		Seat Height (mm) : 460
		Seat & Back Material : Fabric / Oscar
		Frame Finishing : Powder Coating','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1454040358.jpg','kategori' => 'ASSET'),
		  array('id' => '515','nama_barang' => 'Kursi Sofa','merk' => 'Ligna','spesifikasi' => 'rangka kayu, oscar','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '516','nama_barang' => 'Meja makan','merk' => 'ligna','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '517','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '518','nama_barang' => 'Home Theatre','merk' => 'Sony','spesifikasi' => 'Dav-DZ870KV','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '519','nama_barang' => 'Dispenser','merk' => 'Yong Ma','spesifikasi' => 'Hot n normal','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '520','nama_barang' => 'Kursi Pijat','merk' => 'Advance','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '521','nama_barang' => 'Meja Makan','merk' => 'ligna','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '522','nama_barang' => 'Meja','merk' => 'Ligna','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '523','nama_barang' => 'Kursi Lipat','merk' => 'chitose','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '524','nama_barang' => 'White  board','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '525','nama_barang' => 'Meja makan ','merk' => 'hitam','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '526','nama_barang' => 'Kursi','merk' => 'hitam','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '527','nama_barang' => 'Meja makan','merk' => '-','spesifikasi' => 'Rangka besi, alas kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '528','nama_barang' => 'Kursi','merk' => '-','spesifikasi' => 'kayu jati','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '529','nama_barang' => 'Kursi','merk' => 'Ligna','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '530','nama_barang' => 'kursi putar','merk' => 'chitose','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '531','nama_barang' => 'Sepeda statis','merk' => 'monark','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '532','nama_barang' => 'Lemari','merk' => 'barata','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '533','nama_barang' => 'lemari','merk' => 'E','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '534','nama_barang' => 'Dispenser','merk' => 'Nasionaltech','spesifikasi' => 'hot n normal','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '535','nama_barang' => 'Mesin Photo copy','merk' => 'Canon IR 2230','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '536','nama_barang' => 'Scanner','merk' => 'Canon','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '537','nama_barang' => 'Meja kerja','merk' => 'Ligna','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '538','nama_barang' => 'Meja Komputer','merk' => 'Pro design','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '539','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '540','nama_barang' => 'Kursi Putar','merk' => 'Futura','spesifikasi' => 'up down','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '541','nama_barang' => 'Kursi Putar','merk' => 'Ichiko','spesifikasi' => 'up down, putar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '542','nama_barang' => 'PC unit','merk' => 'HP pavilion 20','spesifikasi' => 'intel pentium','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '543','nama_barang' => 'PC unit','merk' => 'Acer  1800','spesifikasi' => 'intel pentium','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '544','nama_barang' => 'PC unit','merk' => 'Acer M1800','spesifikasi' => 'intel pentium','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '545','nama_barang' => 'printer','merk' => 'HP laserjet LJ1320','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '546','nama_barang' => 'Printer','merk' => 'Epson L210','spesifikasi' => 'warna','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '547','nama_barang' => 'Televisi','merk' => 'Digital control','spesifikasi' => '14inch','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '548','nama_barang' => 'Switch hub','merk' => 'Cisco','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '549','nama_barang' => 'Rak Buku','merk' => '-','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '550','nama_barang' => 'Rak Buku','merk' => '-','spesifikasi' => 'kayu+kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '551','nama_barang' => 'Rak buku','merk' => '-','spesifikasi' => 'kayu jati','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '552','nama_barang' => 'Rak buku','merk' => '-','spesifikasi' => 'Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '553','nama_barang' => 'Meja ','merk' => 'Ligna','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '554','nama_barang' => 'Kursi Rapat','merk' => 'chitose','spesifikasi' => 'putar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '555','nama_barang' => 'kursi','merk' => 'ligna','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '556','nama_barang' => 'Meja Baca','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '557','nama_barang' => 'AC Split','merk' => 'Hitachi','spesifikasi' => '2PK','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '558','nama_barang' => 'switch hub','merk' => 'D-Link','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '559','nama_barang' => 'switch hub','merk' => '3com','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '560','nama_barang' => 'kotak P3k','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '561','nama_barang' => 'PC unit','merk' => 'Acer','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '562','nama_barang' => 'PC Unit','merk' => 'HP','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '563','nama_barang' => 'Portable Ultrasonic Flow Meter','merk' => 'EESIFLO/6000 Series','spesifikasi' => 'Portable dual mode flowmeter both TRANSIT TIME and DOPPLER mode without changing sensors
		Easy to install clamp-on sensors with no process interruption
		Non-invasive flow measurement of liquids, no pipeline disturbance, no pressure loss
		Suitable for all commonly used pipe materials with pipe diameters from 6 mm to 6.5 m (1/4  to 256 )
		Integrated wall thickness measurement, 2 flow channels
		','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1455684484.jpg','kategori' => 'ASSET'),
		  array('id' => '564','nama_barang' => 'Process Plant Trainer','merk' => 'Armfield/PCT23MK-II','spesifikasi' => '> Multiple inputs, multiple sensors, multiple control strategies
		    - Manual control, single feedback loops, through to sophisticated cascade loops
		> Temperature, level, flow and conductivity control loops can be implemented
		> Effects of ‘dead time’
		> Operational sequencing, including startup and shutdown
		> Recycle implications on process control
		> On/off, proportioning, PID, PLC, SCADA
		> Fault simulation and diagnosis
		> Includes computer interface (USB) plus sophisticated LabVIEW™ based educational and data logging software','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1459124176.jpg','kategori' => 'ASSET'),
		  array('id' => '565','nama_barang' => 'PCT19BR Industrial PLC Unit - Issue 6','merk' => 'Allen Bradley/PCT19BR','spesifikasi' => ' An industrial PLC (Allen Bradley SLC500) with RS485 and RS232 serial communications
		• Front panel connections for two digital inputs, two digital outputs, two analogue inputs, two analogue outputs, two voltage sources and one voltmeter
		• Rear panel connectors for six analogue inputs, two analogue outputs, eight digital inputs and eight digital outputs
		• Ladder logic software is provided on disk','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1459124459.jpg','kategori' => 'ASSET'),
		  array('id' => '566','nama_barang' => 'PC Desktop','merk' => 'Lenovo H310','spesifikasi' => '...','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1459124966.jpg','kategori' => 'ASSET'),
		  array('id' => '567','nama_barang' => 'Air Conditioneer','merk' => 'Daikin/Ceiling Cassette FCNQ26MV14 non inverter daya 3HP','spesifikasi' => 'DAIKIN Ceiling Cassette FCNQ26MV14 non inverter daya 3HP, 
		termasuk :
		Pipa refrigerasi + insulasi 17,5m
		Drain condensat + insulasi 7,5m
		Kabel daya2 5m
		Kabel komunikasi 22,5m
		R-410A Du-Pont 1kg
		MCB 1unit','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1464249054.jpg','kategori' => 'ASSET'),
		  array('id' => '568','nama_barang' => 'Air Conditioneer','merk' => 'Daikin/Ceiling Cassette FCNQ18MV14 non inverter daya 2HP','spesifikasi' => 'Ceiling Cassette FCNQ18MV14 non inverter daya 2HP, termasuk :
		Pipa refrigerasi + insulasi 17,5m
		Drain condensat + insulasi 7,5m
		Kabel daya 25m
		Kabel komunikasi 22,5m
		R-410A Du-Pont 1kg
		MCB 1unit','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1464249237.jpg','kategori' => 'ASSET'),
		  array('id' => '569','nama_barang' => 'Microwave','merk' => 'Oxone/OX-77D Mirror Microwave OXONE - Grey','spesifikasi' => '▪ Mirror Design
		▪ Capacity : 20 lt
		▪ Energy Consumption : 500watt
		▪ Auto cooking digital program
		▪ LCD display
		▪ Reheat
		▪ Defrost
		▪ Bakes
		▪ Grill Function
		▪ Glass turnable
		▪ Available in 2 colors: silver and black','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1467261391.jpg','kategori' => 'ASSET'),
		  array('id' => '570','nama_barang' => 'Laptop','merk' => 'Dell/Inspiron 14 (5447)','spesifikasi' => '• Intel Core i7-4510U
		• 8GB DDR3, 1TB HDD
		• NIC, WiFi, Bluetooth, Camera
		• 14  WXGA, VGA AMD Radeon M265 2GB
		• Windows 8.1 SL','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1468900055.jpg','kategori' => 'ASSET'),
		  array('id' => '571','nama_barang' => 'Meja Makan','merk' => 'GoodBuy/Vikom OD TAble','spesifikasi' => 'Bentuk segi enam, Bahan Jati warna kuning kecoklatan','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '572','nama_barang' => 'Kursi','merk' => 'GoodBuy/Hamton Chair OD','spesifikasi' => '531010069004 Hamton Chair OD Bahan jati, warna kuning kecoklatan	','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '573','nama_barang' => 'UHF Wireless System Microphone','merk' => 'Shure/SVX-288/PG28','spesifikasi' => 'UHF Wireless Microphone System	 SVX-288/PG28 Wireless Microphone System technical specifications
		Compatible systems per frequency band (up to): 4
		Selectable frequencies: 8
		Auto Setup Features: No
		Audio Reference Companding: No
		Included Antennas: Internal 1/4-wave
		Antenna Options: No
		Receiver Network Ability: No
		PC Control: No
		Rack Hardware: Optional (WASRM for 2 single channel receivers, WADRM for dual channel receiver)
		Case: No
		Transmitter Display: LED
		Battery, Endurance: 2AA, >10h
		Environment: Small stage, karaoke, hotels, schools, restaurants
		Further Technical Specs
		Working Range (Line of Sight)
		HI power mode: 75 m (250 ft)
		LO power mode: 18 m (60 ft)
		Note: Actual range depends on RF signal absorption, reflection and interference.
		 
		Audio Frequency Response
		50 Hz to 15 kHz
		Note: Dependent on microphone type
		 
		Total Harmonic Distortion (Ref. ??48 kHz deviation, 1 kHz tone)
		<1%
		 
		For J9 (New Zealand): Total Harmonic Distortion (Ref. 26 kHz deviation, 1 kHz tone)
		<1%
		 
		Dynamic Range
		90 dB A-weighted, typical
		 
		Operating Temperature Range
		10C (14F) to 50C (122F)

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '574','nama_barang' => 'Mesin Cut Off','merk' => 'Makita/2414NB','spesifikasi' => 'Mesin Cut Off 	 MAKITA 2414NB Mesin Cut Off Daya Listrik : 2000 Watt
		Diameter Batu Potong : 355 mm / 14  
		Kec. Tanpa Beban : 3800 rpm
		Garansi  : 2 tahun 	','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '575','nama_barang' => 'Mesin Bor Tangan','merk' => 'Makita/HP1630','spesifikasi' => '13 mm, 0-3200 rpm, 710 W, sturdy cylinder-shaped
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '576','nama_barang' => 'Mesin Bor Tangan','merk' => 'Makita/SDS Rotary Hammer','spesifikasi' => '
		Specifications
		 Concrete  24mm (15/16  )
		 Steel  13mm (1/2  )
		 Wood  32mm (1-1/4  )
		 Input  780W
		 Blow per minute  0-4,500bpm
		 No load speed  0-1,100rpm
		 Overall length  370mm (14-1/2  )
		 Net weight  2.6kg (5.7lbs)
		 Power supply cord  2.5m (8.2ft.)

		Accessories

		    Depth Rod
		    Grip
		    SDS Drill Bit Set (5.5, 6, 8, 10, 12mm)
		    SDS Plus Chisel
		    13mm Drill Chuck
		Garansi Min. 1 Tahun 	
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '577','nama_barang' => 'Vacuum Pump','merk' => 'Krisbow/KW1900533','spesifikasi' => 'Vacuum Pump 1/3HKRISBOW 
		Dapat digunakan untuk mengeluarkan molekul-molekul gas dari dalam sebuah ruangan tertutup
		Dibuat dari bahan terbaik
		Awet dan tahan lama
		Mudah digunakan
		Garansi Min. 1 Tahun 	
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '578','nama_barang' => 'mini Fogger','merk' => 'Tasco/SP2000','spesifikasi' => 'Spesifikasi
		Dimensi : 540x220x420mm
		Metode Lightning : Automatic
		Bahan Bakar :  Gas Butane
		Kapasitas Bahan Bakar : 1.5 Hr/Can
		Kapasitas Tangki : 2200 cc
		Dispersi : 2200 cc/Hr
		Garansi Min.1 Tahun 	','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '579','nama_barang' => 'Meja Meeting','merk' => 'Aditech/Fifo FM11','spesifikasi' => '
		Spesifikasi:
		1. Model desain yang terkini dan berkelas.
		2. Dilapisi dengan melamine yang anti gores, anti air, dan anti panas.
		3. Menggunakan bahan yang berkualitas dan kuat terbuat dari particle board.
		Bahan: Particle Board
		Dimensi: W 360 x D 120 x H 75cm
		Warna: Beech, Cherry, Maple, dan Grey
		Seri: Fifo Series
		Garansi 1 Tahun dan Instalasi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '580','nama_barang' => 'Digital LAsermeter','merk' => 'BOSCH/GLM7000
		(529010076001)','spesifikasi' => 'Jarak Pengukuran  :  0.05 ~ 70 meter / 0.16 ~ 230 ft , Akurasi Pengukuran  :  +/- 1.5 mm / +/-1/16  , Dioda Laser  :  635 mm, < 1mW 	Buah	2970000	Logistik
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1472539837.JPG','kategori' => 'ASSET'),
		  array('id' => '581','nama_barang' => 'Mesin Ampelas','merk' => 'Makita/B03700','spesifikasi' => 'Specification
		Pad size : 93 x 185mm
		Abrasive paper size : 93 x 228mm
		Input : 180W
		Orbit per min : 10,000rpm
		Overall length : 254mm
		Net weight : 1.4kg
		Power supply cord : 2m
		Accessories
		Abrasive papers 6
		Dust bag','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1472541584.jpg','kategori' => 'ASSET'),
		  array('id' => '582','nama_barang' => 'PC All In One','merk' => 'Lenovo/300-231SU
		','spesifikasi' => 'AIO 300-23ISU,Intel Corei5 Processor 6200U (2.3Ghz, 2C), 4GB DDR4 2133 SODIMM Memory, HDD 1TB 7200RPM SATA, Tray In Rambo, NVidia Geforce 920A 2GB, 802.11AC BT4.0 1X1, 720P MIC, 6-IN-1, Keyboard & Mouse, DOS, Display 23  WLED Maincase WHITE COLOR (1 year warranty).','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1473995812.png','kategori' => 'ASSET'),
		  array('id' => '583','nama_barang' => 'Psychrometer','merk' => 'Taishio/TS90','spesifikasi' => 'Temperature range: 0 ° C to 50 ° C (Wet Bulb Dry Bulb &)

		Product Dimensions (mm): 215 x 138 x 22
		Package Dimensions (mm): 240 x 95 x 30','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '584','nama_barang' => 'Psychrometer','merk' => '...','spesifikasi' => '.....','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '585','nama_barang' => 'CompuFlow','merk' => 'Alnor/8650','spesifikasi' => 'CO2 Sensor Type	Non-dispersive infrared (NDIR)
		Range	CO2: 0-5000 ppm 
		Temperature: 32-122°F (0 to 50°C) 
		Humidity: 5-95% R.H. 
		Dew Point: 5-120°F (-15 to 48°C) 
		Wet Bulb: 40-140°F (5 to 60°C)
		Accuracy	CO2: ±3% of reading or ±50ppm (whichever is greater) 
		Temperature: ±1°F 
		Humidity: ±2% R.H.
		Resolution	CO2: 1 ppm 
		Temperature: 0.1°F 
		Humidity: 0.1% R.H. 
		Dew Point: 0.1°F 
		Wet Bulb: 0.1°F
		Response Time	CO2: 60 seconds (or higher in still air)
		Power Source	4-AA Size Alkaline','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '586','nama_barang' => 'Printer All in one','merk' => 'Epson/L565 ','spesifikasi' => 'A4 5760 x 1440, Fine: (200x200dpi), Photo: (200 x 200 dpi), Fax, Black Text A$ : 7.7ipm, Colour Text A4: 3.8ipm, Etherne 10/100 Base-TX nentwork Apple AirPrint, USB, WIFI 802.11 b/g/n, A4 Flatbed Colour Image scanner 1200 x2400dp','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1479351499.jpg','kategori' => 'ASSET'),
		  array('id' => '587','nama_barang' => 'Printer','merk' => 'Epson/L310','spesifikasi' => 'A4, 5760 x 1440 dpi, Black/White 33 ppm, Color 15 ppm, Tray 1# 100, USB
		Garansi Resmi Min.1 Tahun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1479351811.png','kategori' => 'ASSET'),
		  array('id' => '588','nama_barang' => 'Tachometer','merk' => 'Extech/461995','spesifikasi' => 'Tips and wheel for rpm or linear surface speed
		4 - 1.5V AA batteries
		Reflective tape
		Carrying case','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1479436009.jpg','kategori' => 'ASSET'),
		  array('id' => '589','nama_barang' => 'Tachometer','merk' => 'Lutron/DT1236L','spesifikasi' => 'LASER PHOTO/CONTACT TACHOMETER	
		Model : DT-1236L	
		* Patented, the best tachometer in the world.	
		* Long detecting distance for photo Tach. up to 2 meters.	
		* Photo & contact tachometer in one meter.	
		* Fast sampling time for low contact RPM measurement, automatic reverse display.	
		* Photo Tach. : 10 to 99,999 RPM	
		　Contact Tach. : 0.5 to 19,999 RPM.	
		　Surface speed : m/min, ft/min.	
		* Size : 215 x 67 x 38 mm, patented.	','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1479436266.jpg','kategori' => 'ASSET'),
		  array('id' => '590','nama_barang' => 'Module System Programable Logic Controller (PLC)','merk' => 'AB','spesifikasi' => '......','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '591','nama_barang' => 'Rak Buku Metal','merk' => 'Rione/AD 012','spesifikasi' => 'Tipe Konokdown bahan metal, dimensi 1.040x450x1.800 (LWH) warna Gray kapsitas hingga 1500 buku','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1485308041.jpg','kategori' => 'ASSET'),
		  array('id' => '592','nama_barang' => 'Kursi Susun','merk' => 'Chitose/Kaesar N','spesifikasi' => 'Dimensi : 410x505x926','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '593','nama_barang' => 'Digital Oscilloscope','merk' => 'Rigol/DS1052E','spesifikasi' => 'DS1052E  |  50 MH   DS1052E  |  50 MHz ,
		2 Analog channels + external trigger
		1 Million point deep memory
		1 GSa/sec max sample rate
		5.7??? TFT QVGA (320X240) with 64K color LCD backlit display
		Trigger modes: edge, pulse width,
		 slope, video, pattern, continuous time,
		 and alternate 	Unit	9360000	Logistik
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1487837382.jpg','kategori' => 'ASSET'),
		  array('id' => '594','nama_barang' => 'DC Motor Control Trainer With Modul Engineering','merk' => 'NI Elvis II + 78038102','spesifikasi' => 'DC Motor Control Trainer with Modul Engineering	 National Instrument NI ELVIS II+ 780381-02 dan National Instrument Quanser Qnet DC Motor Add-on Board 780293-01 Terdiri dari :
		1. National Instrument
		NI ELVIS II+ 780381-02 dan 2.National Instrument 
		Quanser Qnet DC Motor Add-on Board 780293-01
		Spesifikasi teknis :
		1. National Instrument
		NI ELVIS II+ 780381-02
		- Fitur : Integrated suite of 12 instruments, offers the flexibility of virtual instrumentation and allows for quick and easy measurement acquisition and display, 100 MS/s oscilloscope
		- Analog input :
		  * Channels : 8 differential or 16 single-ended
		  * Input frequency : 50/60 Hz
		  * Maximum sampling rate : 1.25 MS/s single channel; 1.00 MS/s multichannel (aggregate)
		 - Analog Triggers
		 - Arbitrary Waveform Generator/Analog Output :
		   * Channels  2
		   * Timing resolution : 50 ns
		   * Output range : ??10 V, ??5 V
		- Digital I/O and PFI
		- General-Purpose Counter/Timers
		   * Counter/timers : 2
		   * Resolution : 32 bits  

		- Frequency Generator
		   * Channels : 1
		   * Base clock : 10 MHz, 100 kHz
		- Voltage Measurement
		   * DC ranges : 100 mV, 1 V, 10 V, 60 V
		   * AC ranges : 200 mVrms, 2 Vrms, 20 Vrms
		- Current Measurement : 
		   * DC range : 2 A
		   * AC range : 500 mArms, 2 Arms
		   * Shunt Resistor : 0.1 ??
		- Resistance Measurement :   100?? - 100 M??
		- Capacitance & Inductance Measurement :   50 pF to 500 ??F
		- Modulation Input  2 (AM and FM)
		- Communication : Bus interface Hi-Speed USB  

		2. National Instrument 
		Quanser Qnet DC Motor Add-on Board 780293-01
		- Motor
		  * Torque constant : 0.033
		  * Terminal resistance : 8.7 ohms
		  * Rotor inertia : 18 g cm2
		  * Max torque : 0.1 Nm
		- Linear Amplifier
		  * Gain : 2.3 V/V
		  * Max output voltage : 24 V 
		  * Max current : 5 A
		  * Max output power : 120 W
		- Current Sense Resistor
		  * Current sensitivity : 1.0 A/V
		- Encoder
		  * Lines per revolution : 2048 lines
		  * Resolution-quadrature : 0.0439 deg/count
		  * Type : TTL

		Include :
		- Driver Software
		- QNET plant, software, and courseware
		- Detachable protoboard
		- USB cable and connection

		Garansi resmi agen/distributor Indonesia min. 1 tahun 	
		','no_klas' => '1','satuan_jumlah' => '58','gambar' => '1487837815.jpg','kategori' => 'ASSET'),
		  array('id' => '595','nama_barang' => 'Multi Function Logyc Analyzer Signal Generator ','merk' => 'Hantek/DSO 3062AL','spesifikasi' => 'Multifunction Logic Analyzer Signal Generator 200MSa/s DDS	 Hantek DSO3062AL 
		Digital Channels : 2
		Band Width : Less than 60MHz
		Nomor Model : DSO3062AL
		Record Length : 16M
		Type : Oscilloscope/Logic Analyzer/Arb
		Brand name : Hantek
		Model number : DSO3062AL
		Channel : 8 channels
		Real time Sample rate : 200MS/s
		Vertical resolution : 8bit
		Rise Time : 5.8ns
		Bandwidth : 60MHz(-3dB)
		Analog Channels : 2
		Memory Depth : 10K-16M/CH
		Acessories : 1 tas, 2 analog probe
		Garansi Min. 1 Tahun ','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1487838122.jpg','kategori' => 'ASSET'),
		  array('id' => '596','nama_barang' => 'Kursi Laboratorium','merk' => 'Pudak/Scientific GLF 320 05','spesifikasi' => 'Kursi Lab / Laboratory stool	 Pudak Scientific GLF 320 05
		Tempat duduk : Kayu pejal diameter 30 cm tebal 3 cm, Finishing melamic.
		Rangka : Pipa besi berdinding tebal. Dicat warna hitam.
		Kursi berkaki 4 dengan rangka pipa besi, tempat duduk dari kayu pejal dengan sepatu karet pada setiap kakinya.
		Tinggi Kursi 64 cm
		Garansi 1 Tahun
		Surat Dukungan Dari Distributor Resmi di Indonesia. ','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1487838532.jpg','kategori' => 'ASSET'),
		  array('id' => '597','nama_barang' => 'LCD Projector','merk' => 'Epson/EB-X350','spesifikasi' => 'Projector 	 Projector EPSON EB-X350
		Spesifikasi:
		XGA, 3200 lumens, 15000:1, Comp IN, Auto V-Keystone,
		H-Keystone Slider, Quick Corner, RCA, S-Video, 2 HDMI (1 Supports MHL),
		1 USB Type-A/B, Wifi .
		Garansi Resmi 1 Tahun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1487921851.jpg','kategori' => 'ASSET'),
		  array('id' => '598','nama_barang' => 'PC all in One','merk' => 'HP/Pavilion 23-q162d','spesifikasi' => 'Processor Onboard : Intel Core i7-6700T-2.8GHz Turbo 3.6Ghz

		Memori Standar	  : 4 GB

		Tipe Grafis       : AMD R7 A360 2GB

		Ukuran Layar      : 23 

		Resolusi Layar    : 1920 x 1080

		Tipe Layar        : FHD IPS LED-backlit

		Audio             : Integrated

		Hard Disk         : 1 TB

		Optical Drive     : DVD/RW

		Wireless Network  : 802.11a/b/g/n/ac (2x2)

		Bluetooth         : 4.0

		Interfaces        : 4 USB 2.0 2 USB 3.0 1 headphone/microphone combo

		Sistem Operasi    : Windows 10

		Power             : 90 W AC power adapter

		Dimensi           : 56.8 x 19.3 x 45.1 cm

		Berat             : 8.07 kg','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1487922505.jpg','kategori' => 'ASSET'),
		  array('id' => '599','nama_barang' => 'Layar Projector','merk' => 'Screeview/TSSV1717L','spesifikasi' => '70  178x178 cm','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1488177348.jpg','kategori' => 'ASSET'),
		  array('id' => '600','nama_barang' => 'Projector','merk' => 'Epson/EB-W04','spesifikasi' => 'Projector Epson EB-W04 Spesifikasi: WXGA, 3000 lumens, 15000:1, Auto V/H-Keystone, 1 Comp IN, HDMI (MHL Supported), Split Screen, iProjection w/QR code, S-Video, AV RCA Port, USB type-A/B, Wifi. Garansi Resmi 1 Tahun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1488177712.png','kategori' => 'ASSET'),
		  array('id' => '601','nama_barang' => 'Troley','merk' => 'Krisbow/KW0500048','spesifikasi' => '(612020001013) Trolley	 Krisbow KW0500048 Krisbow/FOLDABLE PLATFORM HANDTRUCK KRISBOW 300KG SMALL 
		Width: 62 Cm, Length: 92 Cm, Height: 14 Cm
		Garansi 1 Tahun 	
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1488178188.jpg','kategori' => 'ASSET'),
		  array('id' => '602','nama_barang' => 'Hardisk External','merk' => 'WD/WDBZFP001BK-PESN','spesifikasi' => '1TB','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '603','nama_barang' => 'LED Monitor','merk' => 'Samsung/LS24D300HLR ','spesifikasi' => '24-inch Widw, 1920x1080, 1000:1,250 cd/m2, VGA, HDMI','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '604','nama_barang' => 'Digital Oscilloscope','merk' => 'Rigol/DSE 1052E','spesifikasi' => 'Display : 20.32 cm (8  ) WVGA-Color-LCD
		Resolution : 800 ??? 480 Pixel
		Interface : -USB-host for i.e. USB sticks  -USB-Device for a PC connection or USB Pict-Bridge printerinterface  -LAN for network connectivity (VIX-II)  -GPIB (IEE-488, General Purpose Interface Bus) using the optional USB-GPIB Module  -Trigger- and Pass/Fail output
		Size : (W ??? H ??? D) 35.2 cm ??? 22.4 cm ??? 11.2 cm
		Weight : 3.6 kg
		Supported operation systems : Windows XP (32Bit + 64Bit), Windows Vista (32Bit + 64Bit), Windows 7 (32Bit + 64Bit)','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1509675456.jpg','kategori' => 'ASSET'),
		  array('id' => '605','nama_barang' => 'CPU','merk' => 'Rakitan','spesifikasi' => 'Rakitan INTEL CORE I7 3770-3,4GHZ MB GIGABYTE H61-DS2 RAM 4GB PC 10600 DEAM HDD 1 TB WD BLACK DVD-RW LG VGA DA 7730 2GB D3 128BIT CASING DAZUMBA 950/ 960 SERIES PSU DAZUMBA 500W PURE KEYBOARD ARMAGGEDDON AK300 MOUSE A4TECH X7','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '606','nama_barang' => 'CPU','merk' => 'Rakitan','spesifikasi' => 'Rakitan Intel core i7 3770 -3.2Ghz mb Gigabyte H61M-DS2 Ram 8GB PC 10600 Vgen Dvd-rw LG sata HDD 1 TB SATA seagate / WD Audio 6 Chanel LAN 10/100mbps Vga DA GTX 750 Ti 2GB D5 128bit STORMX Casing Dvito 950 Psu 600W modular dazumba Keybaord Armaggedon AK300 Mouse Dragonwar Leviathan','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '607','nama_barang' => 'Desktop PC','merk' => 'DELL/Optiplex 3020 MT','spesifikasi' => 'Intel Core i7 Quad Core 3 GHz, RAM 16 GB (2x8GB), VGA ASUS NVIDIA GeForce GT 730 2GB [GT730-2GD3-V2] 128 bit. Hardisk 500 GB, Garansi 1 Tahun','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1489134222.jpg','kategori' => 'ASSET'),
		  array('id' => '608','nama_barang' => 'PC All in one','merk' => 'HP/Pavilion 23-q162d All in one','spesifikasi' => 'OS : Windows 10
		Processor : Intel terbaru dengan Core i7 6700T
		Memori : RAM 4 GB dan harddisk 1 TB
		Tipe grafis : Discrete AMD R7 A360 GPU
		Ukuran layar : 23 Inch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1489138457.jpg','kategori' => 'ASSET'),
		  array('id' => '609','nama_barang' => 'Laptop','merk' => 'ASUS/TP301UJ-DW081D','spesifikasi' => 'Tipe Prosesor:Intel Core i5
		- Processor Onboard: Intel Core i5-6200U Processor (2.3 GHz, 3M Cache) up to 2.80 GHz
		- Memori Standar: 4GB DDR3L 
		- Tipe Grafis: Nvidia GeForce GT920M 2GB 
		- Ukuran Layar: 13.3 Inch 
		- Resolusi Layar: 1366 x 768 
		- Tipe Layar: Touchscreen 
		- Audio: Integrated SonicMaster Lite Technology 
		- Speaker: Integrated 
		- Kapasitas Penyimpanan: 1TB HDD 
		- Wireless Network Type: Integrated 
		- Wireless Network Protocol: 802.11 B/G/N 
		- Wireless Bluetooth: Integrated 
		- Keyboard: Standard Keyboard 
		- Ragam Input Device: Touchpad 
		- Interface: 1 x USB
		-C Gen 1, 2 x USB 3.0 port, 1 x USB 2.0 port, 1 x HDMI, 1 x COMBO audio jack 
		- Sistem Operasi: Pre-sales request Available 
		- Dimensi (PTL): 322 x 227 x 19.9 mm 
		- Berat: 1.5 kg Garansi 1 Tahun.','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1489376948.jpg','kategori' => 'ASSET'),
		  array('id' => '610','nama_barang' => 'LED Monitor','merk' => 'Dell/E2016HV','spesifikasi' => '19.5 Inch [E2016HV] Spesifikasi: 19.5-inch, 1600 x 900, 1000:1, 200 cd/m², VGA. Garansi Min. 1 Tahun.','no_klas' => '1','satuan_jumlah' => '1','gambar' => '1490144952.jpg','kategori' => 'ASSET'),
		  array('id' => '611','nama_barang' => 'Kursi Biro','merk' => 'Futura','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '612','nama_barang' => 'Anemometer digital','merk' => 'Lutron/LM-8000A','spesifikasi' => 'Anemometer 0,4 to 30,0 m/s
		Humidity 10 to 95% RH, Light : 0 t0 20,000 Lux
		Type K Thermometer -100 to 1300 derajat celcius','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1494319103.jpg','kategori' => 'ASSET'),
		  array('id' => '613','nama_barang' => 'PC dekstop','merk' => 'Dell','spesifikasi' => 'Dell Optiplex 9210 MT intel core i7, ram 16giga, VGA GTY 740 4gb p128bit. Hardisk 1TB, monitor 18.5 ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '614','nama_barang' => 'Printer','merk' => 'HP Laserjet Pro 400MFP M425DN','spesifikasi' => 'Print, scan, copy, fax, walk up USB','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '615','nama_barang' => 'LCD Projector','merk' => 'BenQ/MX505A','spesifikasi' => 'XGA (1024 x 768), 3000 Lumens ANSI, 1.8 kg, DLP Technology','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1495507370.jpg','kategori' => 'ASSET'),
		  array('id' => '616','nama_barang' => 'LCD Projector','merk' => 'NEC/NP-303WS','spesifikasi' => 'Projection System	Single DLP® (0.65 )	Single DLP® (0.55 )
		Resolution*1	1,280 × 800 (WXGA)	1,024 × 768 (XGA)
		Lens	Manual focus (Digital zoom, zoom ratio = 1.2)
		 	F-number / Focal Length	F2.4 / f = 6.5 mm
		Lamp	ECO Mode Off	270 W	225 W	270 W
		NORMAL ECO	219 W	171 W	219 W
		ECO	162 W	135 W	162 W
		Light Output*2	ECO Mode Off	3,500 lumens	3,000 lumens	3,300 lumens
		NORMAL ECO	Approx. 81%	Approx. 76%	Approx. 81%
		ECO	Approx. 60%
		Lamp Life*3	ECO Mode Off	3,500 H
		NORMAL ECO	5,000 H	5,500 H	5,000 H
		ECO	8,000 H','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1495513776.jpg','kategori' => 'ASSET'),
		  array('id' => '617','nama_barang' => 'LCD Projecktor','merk' => 'Epson','spesifikasi' => 'Epson putih','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '618','nama_barang' => 'Papan Tulis','merk' => 'Sakura','spesifikasi' => 'white board besar','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '619','nama_barang' => 'Tempat Sampah','merk' => 'Lion star','spesifikasi' => 'plastik','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '620','nama_barang' => 'Filing Kabinet','merk' => 'lion','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '621','nama_barang' => 'AC Split','merk' => 'LG','spesifikasi' => '1PK','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '622','nama_barang' => 'AC Split','merk' => 'Panasonic','spesifikasi' => '1PK','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '623','nama_barang' => 'Meja kerja','merk' => 'Ligna','spesifikasi' => '1/2 biro','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '624','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'rangka besi, warna biru','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '625','nama_barang' => 'Mesin Fax','merk' => 'Panasonic','spesifikasi' => 'Panasonic KX-FP701, Fax machine,A4, Plain Paper','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '626','nama_barang' => 'Dekstop PC','merk' => 'ASUS Desktop M32CD-ID001T 
		','spesifikasi' => 'Intel Core i5-6400, 1TB HDD, VGA Intel HD Graphics 530, Win 10, 4GB DDR4, DVDRW, NIC, Xtra Bonus: Bundle Monitor - LED 18.5, 2 Years Warranty  Unit','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '627','nama_barang' => 'Proyektor','merk' => 'NEC NP-M300WS','spesifikasi' => ' Proyektor 3000-lumen Widescreen Short Throw
		0.59     LCD w / MLA
		3000 yang normal / Eco = approx. 75% dari mode normal
		WXGA 1280 x 800
		UXGA 1600 x 1200 
		2000:1
		265W AC / 195W eco
		3000 jam normal / 3500 jam eco
		Garansi Resmi Min. 1 Tahun 
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '628','nama_barang' => 'Projector','merk' => 'BENQ Projector MX505','spesifikasi' => 'XGA (1024 x 768), 3000 Lumens ANSI, 1.8 kg, DLP Technology
		Garansi Resmi Min.1 Tahun

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '629','nama_barang' => 'Anemometer','merk' => 'Lutron LM 8000A ','spesifikasi' => ' Anemometer 4 in 1, Anemometer, Humidity meter, Light Meter, Type K Thermometer, Model : LM-8000A, * Humidity : 10 to 95 %RH,oC/oF * Anemometer : 0.4 to 30.0 m/s. * Anemometer unit : m/s, km/h, MPH, knots, ft/min, oC/oF.  * Light : 0 to 20,000 Lux, 0 to 1,680 Ft-cd, auto range. * Type K Thermometer : -100 to 1300 oC, oC/oF. * Data hold, Record (Max., Min.) * Tiny bone shape with light weight and small size.
		Garansi Resmi 1 Tahun 
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '630','nama_barang' => 'Monitor LED','merk' => 'Samsung S19F350HNE','spesifikasi' => '15.6    , 1366x768, 11ms, 10.000.000:1 (DCR), 250 cd/m?, LED Widescreen
		Warranty minimum :
		1 tahun sparepart
		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '631','nama_barang' => 'Flexible Clamp On Sensor','merk' => 'Hioki 9667','spesifikasi' => 'Item Depth : 1-11/64 inches
		Number of Items : 1
		Output Type : 0.5 V
		Overall Height : 3-3/8  inches
		Overall Width : 10  inches
		Part Number : 9667
		UNSPSC Code : 31162918
		Garansi Min. 1 Tahun

		','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '632','nama_barang' => 'Harddisk','merk' => 'WD Mybook','spesifikasi' => 'Harddisk Eksternal WD My Book Premium Storage 3,5      6 TB USB 3.0
		Garansi Min. 1 Tahun
		','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '633','nama_barang' => 'Lemari Besi','merk' => 'ALBA','spesifikasi' => 'Abu2','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '634','nama_barang' => 'Lemari Besi','merk' => 'VIP','spesifikasi' => 'Abu2','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '635','nama_barang' => 'Lemari Kaca','merk' => 'DATASCRIP','spesifikasi' => 'Krem','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '636','nama_barang' => 'Lemari besi','merk' => 'Lion','spesifikasi' => 'Abu2','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '637','nama_barang' => 'Meja Praktikum','merk' => 'Custom','spesifikasi' => 'Alas KAyu Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '638','nama_barang' => 'PC Workstation','merk' => 'HP Z400','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '639','nama_barang' => 'FCS Cabinet','merk' => 'Yokogawa','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '640','nama_barang' => 'SIS Cabinet','merk' => 'Yokogawa','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '641','nama_barang' => 'Coriolis','merk' => 'Yokogawa','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '642','nama_barang' => 'Mass Flow Converter','merk' => 'Yokogawa','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '643','nama_barang' => 'Wirelles Transmitter','merk' => 'Yokogawa','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '644','nama_barang' => 'Temperatur Transmitter','merk' => 'Yokogawa','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '645','nama_barang' => 'Wirelles transmitter','merk' => 'Honeywell','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '646','nama_barang' => 'AC Split','merk' => 'LG','spesifikasi' => '1.5PK','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '647','nama_barang' => 'Lemari Besi','merk' => 'Lion','spesifikasi' => 'Abu2','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '648','nama_barang' => 'Meja Praktikum','merk' => 'Custom','spesifikasi' => 'Alas kayu Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '649','nama_barang' => 'Meja','merk' => 'Ligna','spesifikasi' => '1/2 Biro','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '650','nama_barang' => 'Meja Komputer','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '651','nama_barang' => 'Rak buku','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '652','nama_barang' => 'Papan Tulis','merk' => 'Sakura','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '653','nama_barang' => 'Filling Cabinet','merk' => 'Lion','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '654','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'biru','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '655','nama_barang' => 'AC SPLIT','merk' => 'LG','spesifikasi' => '1.5PK','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '656','nama_barang' => 'PC ','merk' => 'ACER M3910','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '657','nama_barang' => 'PC','merk' => 'ACER M3970','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '658','nama_barang' => 'Loker','merk' => 'Krisbow','spesifikasi' => 'loker besi, tutup pintu','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '659','nama_barang' => 'Rak Buku','merk' => 'custom','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '660','nama_barang' => 'Rak Pemyimpanan','merk' => 'custom','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '661','nama_barang' => 'Meja Praktikum','merk' => 'custom','spesifikasi' => 'alas kayu rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '662','nama_barang' => 'Meja','merk' => 'Ligna','spesifikasi' => '1/2 Biro','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '663','nama_barang' => 'Meja Praktikum','merk' => 'custom','spesifikasi' => 'Alas Putih rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '664','nama_barang' => 'AC Split','merk' => 'Samsung','spesifikasi' => '1PK','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '665','nama_barang' => 'TV LCD','merk' => 'Sharp','spesifikasi' => '40 ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '666','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '667','nama_barang' => 'Kursi','merk' => 'Ligna','spesifikasi' => 'rangka kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '668','nama_barang' => 'PC Komputer','merk' => 'Lenovo','spesifikasi' => 'Touchscreen 24 ','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '669','nama_barang' => 'PC Komputer','merk' => 'Acer M 3910','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '670','nama_barang' => 'PC Komputer','merk' => 'ACER M1800','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '671','nama_barang' => 'Printer ','merk' => 'Epson L110','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '672','nama_barang' => 'Monitor','merk' => 'Samsung','spesifikasi' => '24 ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '673','nama_barang' => 'Layar','merk' => 'Kokus','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '674','nama_barang' => 'Dispenser','merk' => 'Sharp','spesifikasi' => 'Hot n Normal','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '675','nama_barang' => 'Oscilloscope','merk' => 'GOS 622G','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '676','nama_barang' => 'Generator Sinyal','merk' => 'GW','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '677','nama_barang' => 'Loker Kaca','merk' => 'Custom','spesifikasi' => 'Tutup Kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '678','nama_barang' => 'Resistence Loss Measuring Apparatus','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1509671929.jpg','kategori' => 'ASSET'),
		  array('id' => '679','nama_barang' => 'Mass & Heat Transfer Experience','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '680','nama_barang' => 'Thermometer Comparison Apparatus','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '1509671511.jpg','kategori' => 'ASSET'),
		  array('id' => '681','nama_barang' => 'Flow Meter','merk' => 'Custom','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '682','nama_barang' => 'Meja Praktikum','merk' => 'Custom','spesifikasi' => 'Alas Kayu Rangka Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '683','nama_barang' => 'Rak Penyimpanan','merk' => 'custom','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '684','nama_barang' => 'Oscilloscope','merk' => 'GW-Intek GOS 6112','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '685','nama_barang' => 'Power Supply','merk' => 'LW-PS 305D','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '686','nama_barang' => 'Power Supply','merk' => 'PS 3010U','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '687','nama_barang' => 'Generator Sinyal','merk' => 'GW Instek SFG-2104','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '688','nama_barang' => 'Exhaust Fan','merk' => 'CKE','spesifikasi' => '10ich','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '689','nama_barang' => 'Rak Penyimpanan ','merk' => '-','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '690','nama_barang' => 'Meja Praktikum','merk' => '-','spesifikasi' => 'Alas kayu, rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '691','nama_barang' => 'Kursi Lipat','merk' => 'Chitose','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '692','nama_barang' => 'Kursi','merk' => 'Ligna','spesifikasi' => 'kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '693','nama_barang' => 'Kulkas','merk' => 'Thosiba Glacio','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '694','nama_barang' => 'Lemari Penyimpanan','merk' => '-','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '695','nama_barang' => 'Loker','merk' => '-','spesifikasi' => 'Kayu','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '696','nama_barang' => 'Rak Piring','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '697','nama_barang' => 'Lemari Penyimpanan','merk' => '-','spesifikasi' => 'Pintu kaca geser','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '698','nama_barang' => 'Kursi Praktikum','merk' => '-','spesifikasi' => 'Kotak','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '699','nama_barang' => 'Lemari Asam','merk' => 'Labconco','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '700','nama_barang' => 'Timbangan','merk' => 'AMstek','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '701','nama_barang' => 'Timbangan','merk' => 'H-MS-79 Health','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '702','nama_barang' => 'Hotplate Stirrer','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '703','nama_barang' => 'Centrifuge PLC series','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '704','nama_barang' => '-','merk' => 'VELP','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '705','nama_barang' => 'Oven','merk' => 'Kris','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '706','nama_barang' => '-','merk' => 'Branson','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '707','nama_barang' => 'Exhaust Fan','merk' => 'Panasonic','spesifikasi' => '10Inch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '708','nama_barang' => 'Meja Tamu','merk' => '-','spesifikasi' => 'Kaca','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '709','nama_barang' => 'Papan Tulis','merk' => 'Custom','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '710','nama_barang' => 'Rak Besi','merk' => 'custom','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '711','nama_barang' => 'Meja Belajar','merk' => '-','spesifikasi' => 'Hijau','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '712','nama_barang' => 'Loker','merk' => 'Krisbow','spesifikasi' => '3x6','no_klas' => '1','satuan_jumlah' => '71','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '713','nama_barang' => 'PC Touchscreen','merk' => 'Lenovo','spesifikasi' => '24inch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '714','nama_barang' => 'Exhaust Fan','merk' => 'Panasonic','spesifikasi' => '10Inch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '715','nama_barang' => 'Dispenser','merk' => 'Sharp','spesifikasi' => 'Hot & Cool','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '716','nama_barang' => 'Lemari Besi ','merk' => 'VIP','spesifikasi' => 'Pintu kaca geser','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '717','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => 'rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '718','nama_barang' => 'Kursi Putar','merk' => '-','spesifikasi' => 'Plastik','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '719','nama_barang' => 'Kursi Putar','merk' => '-','spesifikasi' => 'Besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '720','nama_barang' => 'Wifi','merk' => 'TP-Link','spesifikasi' => '4 port','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '721','nama_barang' => 'Filling Cabinet','merk' => 'Elite','spesifikasi' => 'besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '722','nama_barang' => 'Meja Kerja','merk' => '-','spesifikasi' => 'alas kaca','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '723','nama_barang' => 'Meja Komputer','merk' => 'Custom','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '724','nama_barang' => 'Kursi','merk' => 'Futura','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '725','nama_barang' => 'Kursi','merk' => 'Vios','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '726','nama_barang' => 'Kursi Lipat','merk' => 'Chitose','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '727','nama_barang' => 'Rak Penyimpanan','merk' => 'Custom','spesifikasi' => 'Rangka Besi','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '728','nama_barang' => 'Exhaust Fan','merk' => 'KDK','spesifikasi' => '16inch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '729','nama_barang' => 'Stabilizer','merk' => 'OKI','spesifikasi' => '3000 VA','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '730','nama_barang' => 'Meja Praktikum','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '731','nama_barang' => 'Papan Tulis','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '732','nama_barang' => 'Magic Com','merk' => 'Miyako','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '733','nama_barang' => 'Kompor gas Mini','merk' => 'Bispro','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '734','nama_barang' => 'Monitor','merk' => 'HP','spesifikasi' => 'Tabung flat 17 ','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '735','nama_barang' => 'Rak Sepatu','merk' => '-','spesifikasi' => 'Plastik','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '736','nama_barang' => 'Meja Kayu','merk' => '-','spesifikasi' => 'Rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '737','nama_barang' => 'Tungku','merk' => 'Cress Electric Furnace','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '738','nama_barang' => 'Tabung Nitrogen','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '76','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '739','nama_barang' => 'Variac','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '740','nama_barang' => 'Oven','merk' => 'Kirin','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '741','nama_barang' => 'Oven','merk' => 'Kris','spesifikasi' => 'Besar','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '742','nama_barang' => 'Oven','merk' => 'Kris ','spesifikasi' => 'Kecil','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '743','nama_barang' => 'Microwave','merk' => 'Kris','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '744','nama_barang' => 'Microwave ','merk' => 'Maspion','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '745','nama_barang' => 'Tungku','merk' => 'SNOL','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '746','nama_barang' => 'Kipas Angin','merk' => 'Trisonic','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '747','nama_barang' => 'High Energy Milling','merk' => 'HEM-E3D','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '748','nama_barang' => 'Lemari Besi','merk' => 'Lion','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '749','nama_barang' => 'Tabung Gas','merk' => '-','spesifikasi' => 'Besar','no_klas' => '1','satuan_jumlah' => '76','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '750','nama_barang' => 'Tabung Gas','merk' => '-','spesifikasi' => 'Kecil','no_klas' => '1','satuan_jumlah' => '76','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '751','nama_barang' => 'Meja Praktikum','merk' => 'Custom','spesifikasi' => 'Alas Kayu rangka besi','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '752','nama_barang' => 'Timbangan','merk' => 'KERN','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '753','nama_barang' => 'Stirrer','merk' => 'E-Scientific','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '754','nama_barang' => 'Spin coating','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '755','nama_barang' => 'Stirrer with heater','merk' => 'Labtech','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '756','nama_barang' => 'Stirrer with heater','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '757','nama_barang' => 'Microwave','merk' => 'General','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '758','nama_barang' => 'Power Control','merk' => 'Omron','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '759','nama_barang' => 'Sonicator','merk' => 'Qsonica','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '760','nama_barang' => 'Reflectometer','merk' => 'Toyoseiki','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '761','nama_barang' => 'DC Voltage Current Standar','merk' => 'YEW2553','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '762','nama_barang' => 'Power Supply','merk' => 'Agilent','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '763','nama_barang' => 'Lemari Gelas Plastik','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '764','nama_barang' => 'Rak Plastik','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '765','nama_barang' => 'Rak alat','merk' => 'Custom','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '766','nama_barang' => 'Lemari Kayu','merk' => '-','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '767','nama_barang' => 'Lemari Kaca','merk' => '-','spesifikasi' => 'Pintu geser','no_klas' => '1','satuan_jumlah' => '11','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '768','nama_barang' => 'Plasma Sputtering Coater','merk' => 'GSL-1100X-SPC12','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '769','nama_barang' => 'Two Valve Capasitor Motor','merk' => 'YL7134','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '770','nama_barang' => 'Netbook','merk' => 'Asus Sonicmaster','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '771','nama_barang' => 'Multimeter','merk' => 'Picotest','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '772','nama_barang' => 'LCR Meter','merk' => 'BK Precison','spesifikasi' => '-','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '773','nama_barang' => 'Exhaust Fan','merk' => 'KDK','spesifikasi' => '16Inch','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '774','nama_barang' => 'power suplay ajilen   ','merk' => 'ajilen','spesifikasi' => '30 v 10 ampere','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1509501148.jpg','kategori' => 'ASSET'),
		  array('id' => '775','nama_barang' => 'thermo control','merk' => 'omron/123','spesifikasi' => '0-1200','no_klas' => '1','satuan_jumlah' => '84','gambar' => '1509502035.jpg','kategori' => 'NON ASSET'),
		  array('id' => '776','nama_barang' => 'volt meter agilen','merk' => ' agilen','spesifikasi' => '10 ampere 1000 volt','no_klas' => '1','satuan_jumlah' => '1','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '777','nama_barang' => 'Distance Meter','merk' => 'Crisbow','spesifikasi' => '100 M','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET'),
		  array('id' => '778','nama_barang' => 'vsd motor','merk' => 'toshiba/oo7','spesifikasi' => '0-50 hz','no_klas' => '1','satuan_jumlah' => '11','gambar' => '1509503711.jpg','kategori' => 'NON ASSET'),
		  array('id' => '779','nama_barang' => 'Gas Dilution Calibrator','merk' => 'Serinus/Cal 3000','spesifikasi' => 'Dilution Gas Inputs: 1 standard 100-200 kPa (g)2 optional)
				Source Gas Inputs: 4 standard 100-200 kPa (g) (8 optional)
				Dilution Mass Flow Controller: 10 SLPM, 0 Deg, 1 ATM (std), 1 SLPM, 2 SLPM, 5 SLPM or 20 SLPM (optional), 2nd MFC (optional)
				Source Mass Flow Controller: 50 SCCM, 0 Deg, 1 ATM std),
				10 SCCM, 20 SCCM, 100 SCCM, 500 SCCM or 1 SLPM, 2 SLPM (optional), 2nd MFC (optional)
				Flow Accuracy (Constant Temp): Within 1% of full scale
				Flow Repeatability: Within 0.15% of full scale
				Linearity: Within 0.15% of full scale
				Operating Gas Pressure: 100-200 kPa
				Zero Drift: < 0.6% per year
				Response Time: < 5 seconds
				Output Manifold: 4 output ports standard 
				Dilution Ratio: Variable 10:1 to 2000:1 (std
				confi guration) 
				Range: 0–20 ppm
				Precision: 0.5 ppb or 0.2% of reading, whichever is greater
				Linearity: <1% of full scale
				Noise At Zero: <0.25 ppb
				Response Time: 30 seconds to 95%
				Zero Drift: Temperature: 1.0 ppb per °C 24 hours: < 0.3 ppb 7 days: < 0.3 ppb
				Span Drift: Temperature: 0.1% per °C 7 days: 0.5% of reading
				','no_klas' => '1','satuan_jumlah' => '84','gambar' => '','kategori' => 'ASSET')
		);


		foreach ($barang as $key => $value) {
	        $asset = new Asset();
	        $asset->name = $value['nama_barang'];
	        $asset->image = $value['gambar'];
	        $asset->type = $value['merk'];
	        $asset->spesification = $value['spesifikasi'];
	        if ($value['kategori'] != 'ASSET') {
		        $asset->category = 0;
	        }
	        $asset->save();
		}

    }
}
