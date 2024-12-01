export default {
		setup() {
				const skill = [{
						image: 'approach',
						text: 'Передовой подход\nк образовательному процессу',
				},
				{
						image: 'improvement',
						text: 'Непрерывное усовершенствование\nи пополнение базы курсов',
				},
				{
						image: 'teacher',
						text: 'Только практикующие преподаватели',
				}, {
						image: 'proffesor',
						text: 'Сопровождение на всех\nэтапах. От начала обучения\nдо трудоустройства',
				}
				,];
				function genImage(img){
						return '../../src/assets/main/' + img + '.svg'
				}
				return {
						skill,
						genImage
				}
		}
}