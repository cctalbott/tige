﻿package com.build.main {	import flash.display.Sprite;	import flash.net.URLRequest;	import flash.display.Loader;		public class LoadClass extends Sprite {		public function LoadClass(url:String) {			var _theUrl:String = url;			var _theRequest:URLRequest = new URLRequest(_theUrl);			var _theLoader:Loader = new Loader();						_theLoader.load(_theRequest);						addChild(_theLoader);		}	}}