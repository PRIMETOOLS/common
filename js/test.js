require(Modules.IVR);
 
var inc,
	extState = null;
 
function initIVR() {
	extState = new IVRState("extension", {
        prompt: {
              say: "Введите любые две цифры с клавиатуры телефона",
              lang: Language.RU_RUSSIAN_FEMALE
        },
		type: "inputfixed",
		inputLength: 2
		
	}, function (data) {
        var mas = 0;
        for(i = 0; i < data.length; i++){
             mas += Number(data[i])
        }
      	inc.say('Сумма введенных вами чисел ровна '+mas,Language.RU_RUSSIAN_FEMALE)
	});
}

VoxEngine.addEventListener(AppEvents.Started, function (e) {
	initIVR();
});
 
VoxEngine.addEventListener(AppEvents.CallAlerting, function (e) {
	inc = e.call;
	inc.addEventListener(CallEvents.Connected, handleCallConnected);
	inc.answer();
});
 
function handleCallConnected(e) {
	extState.enter(inc);
}
 