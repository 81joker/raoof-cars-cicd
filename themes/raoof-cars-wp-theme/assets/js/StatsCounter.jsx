/* Stats counter section */
function StatsCounter() {
  const stats = [
    { num: '25+', label: 'سيارة فاخرة' },
    { num: '12', label: 'مدينة أوروبية' },
    { num: '8', label: 'سنوات خبرة' },
    { num: '24/7', label: 'دعم متواصل' },
  ];
  return (
    <section style={{ background: '#111111', paddingBlock: 80 }}>
      <div style={{
        maxWidth: 1200, margin: '0 auto', padding: '0 40px',
        display: 'grid', gridTemplateColumns: 'repeat(4, 1fr)', gap: 24,
        textAlign: 'center',
      }}>
        {stats.map((s, i) => (
          <div key={i} style={{
            paddingInlineStart: i ? 24 : 0,
            borderInlineStart: i ? '1px solid rgba(212,160,23,0.18)' : 'none',
          }}>
            <div style={{
              fontFamily: "'Cormorant Garamond', serif",
              fontStyle: 'italic', fontWeight: 700,
              fontSize: 'clamp(56px, 6vw, 76px)',
              color: '#D4A017', lineHeight: 1,
            }}>{s.num}</div>
            <div style={{
              fontFamily: "'Tajawal'", fontSize: 15,
              color: 'rgba(255,255,255,0.72)',
              marginTop: 12, letterSpacing: '0.04em',
            }}>{s.label}</div>
          </div>
        ))}
      </div>
    </section>
  );
}
window.StatsCounter = StatsCounter;
