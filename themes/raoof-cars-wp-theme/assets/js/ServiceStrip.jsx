/* Services strip — overlaps bottom of hero */
function ServiceStrip() {
  const items = [
    { icon: 'user-round', title: 'خدمة تأجير السيارات مع سائق', desc: 'سائقون محترفون يتحدثون العربية' },
    { icon: 'plane', title: 'خدمة الاستقبال من المطار', desc: 'استقبال فاخر مباشرة من بوابة الوصول' },
    { icon: 'car', title: 'خدمة تأجير السيارات', desc: 'أحدث الموديلات بدون سائق' },
  ];
  return (
    <section style={{
      maxWidth: 1200, margin: '-80px auto 0', position: 'relative', zIndex: 5,
      padding: '0 40px',
    }}>
      <div style={{
        background: 'rgba(17,17,17,0.92)',
        backdropFilter: 'blur(14px)',
        WebkitBackdropFilter: 'blur(14px)',
        border: '1px solid rgba(212,160,23,0.25)',
        padding: '36px 36px',
        display: 'grid', gridTemplateColumns: 'repeat(3, 1fr)', gap: 32,
        boxShadow: '0 24px 60px rgba(0,0,0,0.45)',
      }}>
        {items.map((it, i) => (
          <div key={i} style={{
            display: 'flex', alignItems: 'center', gap: 18,
            paddingInlineStart: i ? 32 : 0,
            borderInlineStart: i ? '1px solid rgba(212,160,23,0.2)' : 'none',
          }}>
            <div style={{
              width: 56, height: 56, flexShrink: 0,
              border: '1px solid #D4A017', color: '#D4A017',
              display: 'flex', alignItems: 'center', justifyContent: 'center',
            }}>
              <Icon name={it.icon} size={26} />
            </div>
            <div>
              <h4 style={{
                fontFamily: "'Cairo', 'Tajawal', sans-serif",
                fontSize: 17, fontWeight: 700, color: '#D4A017',
                margin: 0, marginBottom: 4,
              }}>{it.title}</h4>
              <p style={{
                fontFamily: "'Tajawal'", fontSize: 14, lineHeight: 1.5,
                color: 'rgba(255,255,255,0.72)', margin: 0,
              }}>{it.desc}</p>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
}
window.ServiceStrip = ServiceStrip;
