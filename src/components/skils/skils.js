import approach from '/public/main/approach.svg'
import improvement from '/public/main/improvement.svg'
import teacher from '/public/main/teacher.svg'
import proffesor from '/public/main/proffesor.svg'

export default {
		setup() {
				const skill = [{
						image: approach,
						text: 'Передовой подход\nк образовательному процессу',
				},
				{
						image: improvement,
						text: 'Непрерывное усовершенствование\nи пополнение базы курсов',
				},
				{
						image: teacher,
						text: 'Только практикующие преподаватели',
				}, {
						image: proffesor,
						text: 'Сопровождение на всех\nэтапах. От начала обучения\nдо трудоустройства',
				}
				,];
				return {
						skill,
				}
		}
}