/* Fleet cards — two large featured cards: with-driver vs without-driver */
function FleetCards({ onBook }) {
  const cards = [
    {
      title: 'مع سائق',
      eyebrow: 'CHAUFFEUR',
      desc: 'استمتع بالرحلة بالكامل — سائق محترف يتحدث العربية، يعرف الطرق، ويلتزم بأعلى معايير الخصوصية والاحترام. مثالي للعائلات وكبار الشخصيات.',
      img: 'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=1400&q=80',
    },
    {
      title: 'بدون سائق',
      eyebrow: 'SELF-DRIVE',
      desc: 'أحدث طرازات BMW ومرسيدس الفاخرة، جاهزة للاستلام من المطار أو الفندق. حرية التنقل بأناقة وراحة، مع خدمة دعم متواصلة.',
      img: 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=1400&q=80',
    },
  ];
  return (
    <section style={{ background: '#F5F0E8', paddingBlock: 100 }}>
      <div style={{ maxWidth: 1300, margin: '0 auto', padding: '0 40px' }}>
        <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: 28 }}>
          {cards.map((c, i) => (
            <article key={i} style={{
              background: '#111111', color: '#F5F0E8',
              border: '1px solid rgba(212,160,23,0.25)',
              overflow: 'hidden',
              transition: 'transform 240ms cubic-bezier(.22,.61,.36,1), box-shadow 240ms',
            }}
            onMouseEnter={e => { e.currentTarget.style.transform = 'translateY(-6px)'; e.currentTarget.style.boxShadow = '0 24px 60px rgba(0,0,0,0.35)'; }}
            onMouseLeave={e => { e.currentTarget.style.transform = 'translateY(0)'; e.currentTarget.style.boxShadow = 'none'; }}>
              <div style={{
                height: 380,
                backgroundImage: `linear-gradient(180deg, rgba(17,17,17,0.15), rgba(17,17,17,0.6)), url('${c.img}')`,
                backgroundSize: 'cover', backgroundPosition: 'center',
              }} />
              <div style={{ padding: '36px 40px 40px' }}>
                <div style={{
                  fontFamily: "'Tajawal'", fontSize: 12, fontWeight: 500,
                  letterSpacing: '0.32em', color: '#D4A017', marginBottom: 10,
                }}>{c.eyebrow}</div>
                <h3 style={{
                  fontFamily: "'Cairo', 'Tajawal', sans-serif",
                  fontSize: 32, fontWeight: 700, color: '#F5F0E8',
                  margin: '0 0 16px',
                }}>{c.title}</h3>
                <p style={{
                  fontFamily: "'Tajawal'", fontSize: 16, lineHeight: 1.75,
                  color: 'rgba(255,255,255,0.72)', margin: '0 0 28px',
                }}>{c.desc}</p>
                <Button variant="primary" onClick={onBook} icon={<Icon name="calendar-days" size={18} />}>احجز الآن</Button>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
}
window.FleetCards = FleetCards;
