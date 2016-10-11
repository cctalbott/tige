package com.build.menu {
	import com.build.menu.ColorBtnClass;
	import flash.display.Sprite;
	import flash.events.Event;
	import flash.events.MouseEvent;
	import flash.text.TextField;
	import flash.text.TextFormat;
	import flash.text.TextFieldAutoSize;
	import flash.text.AntiAliasType;
	
	public class SpeakerColorMenuClass extends Sprite {
		private var _content = new Sprite();
		private var colorBtn1:ColorBtnClass = new ColorBtnClass(0xEAEEF1);
		private var colorBtn5:ColorBtnClass = new ColorBtnClass(0x0D0D0D);
		private var _speakerTextFormat:TextFormat = new TextFormat();
		private var _speakerColorTxt:TextField = new TextField();
		
		public function SpeakerColorMenuClass() 
		{
			init();
		}
		
		private function init():void 
		{
			this.addChild(_content);
			
			// set up speaker menu text
			_speakerTextFormat.color = 0xFFFFFF;
			_speakerTextFormat.size = 10;
			_speakerTextFormat.font = "Arial";
			
			_speakerColorTxt.embedFonts = true;
			_speakerColorTxt.autoSize = TextFieldAutoSize.LEFT;
			_speakerColorTxt.antiAliasType = AntiAliasType.ADVANCED;
			_speakerColorTxt.defaultTextFormat = _speakerTextFormat;
			_speakerColorTxt.selectable = false;
			_speakerColorTxt.mouseEnabled = false;
			
			_content.addEventListener(Event.ADDED_TO_STAGE, contentAdded, false, 0, true);
		}
		
		private function contentAdded(event:Event):void 
		{
			colorBtn1.name = "color1BtnMC";
			colorBtn5.name = "color5BtnMC";
			
			_content.addChild(colorBtn1);
			_content.addChild(colorBtn5);
			colorBtn5.x = 22;
			
			_speakerColorTxt.x = 0;
			_speakerColorTxt.y = -25;
			_speakerColorTxt.text = "speakers: ";
			
			_content.addChild(_speakerColorTxt);
			
			_content.removeEventListener(Event.ADDED_TO_STAGE, contentAdded, false);
		}
	}
}