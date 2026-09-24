/* Hero — full-bleed photo with dark overlay */
function Hero({ onBook, onFleet }) {
  return (
    <section style={{
      position: 'relative',
      minHeight: 620,
      background: `linear-gradient(180deg, rgba(17,17,17,0.85) 0%, rgba(17,17,17,0.7) 45%, rgba(17,17,17,0.95) 100%), url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1800&q=80')`,
      backgroundSize: 'cover',
      backgroundPosition: 'center',
      display: 'flex', alignItems: 'center', justifyContent: 'center',
      paddingBlock: 80,
    }}>
      <div style={{
        maxWidth: 1100, padding: '0 40px',
        textAlign: 'center', color: 'white',
      }}>
        <div style={{
          fontFamily: "'Tajawal'", fontSize: 14, fontWeight: 500,
          letterSpacing: '0.32em', color: '#D4A017',
          marginBottom: 24, textTransform: 'uppercase',
        }}>
          LUXURY · CHAUFFEUR · EUROPE
        </div>
        <h1 style={{
          fontFamily: "'Cairo', 'Tajawal', sans-serif",
          fontSize: 'clamp(36px, 5.5vw, 60px)',
          fontWeight: 700,
          lineHeight: 1.25,
          margin: 0,
          textWrap: 'balance',
        }}>
          شركة <span style={{
            fontFamily: "'Cormorant Garamond', serif",
            fontStyle: 'italic',
            color: '#D4A017',
            fontWeight: 700,
          }}>Raoof&nbsp;Cars</span> للأرشاد السياحي
          <br/>
          وتأجير السيارات مع سائق وبدون
          <br/>
          في جميع أنحاء أوروبا
        </h1>
        <p style={{
          fontFamily: "'Tajawal'", fontSize: 19, lineHeight: 1.75,
          color: 'rgba(255,255,255,0.78)',
          maxWidth: 720, margin: '32px auto 0',
        }}>
          خدمة استثنائية بمعايير الضيافة الخمس نجوم، بسيارات حديثة وسائقين محترفين يتحدثون العربية.
        </p>
        <div style={{ display: 'flex', gap: 16, justifyContent: 'center', marginTop: 44, flexWrap: 'wrap' }}>
          <Button variant="primary" onClick={onBook} icon={<Icon name="calendar-days" size={18} />}>احجز الآن</Button>
          <Button variant="outline" onClick={onFleet} icon={<Icon name="car" size={18} />}>شاهد الأسطول</Button>
        </div>
      </div>
    </section>
  );
}
window.Hero = Hero;
